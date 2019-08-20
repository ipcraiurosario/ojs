{**
 * templates/frontend/objects/article_details.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an Article which displays all details about the article.
 *  Expected to be primary object on the page.
 *
 * @uses $article Article This article
 * @uses $issue Issue The issue this article is assigned to
 * @uses $section Section The journal section this article is assigned to
 * @uses $keywords array List of keywords assigned to this article
 * @uses $citationFactory @todo
 * @uses $pubIdPlugins @todo
 *}
<article class="article-details">
	<header>
		<h1 class="page-header">
			{$article->getLocalizedTitle()|escape}
			{if $article->getLocalizedSubtitle()}
				<small>
					{$article->getLocalizedSubtitle()|escape}
				</small>
			{/if}
		</h1>
	</header>

	<div class="row">

		<section class="article-sidebar col-md-4">

			{* Screen-reader heading for easier navigation jumps *}
			<h2 class="sr-only">{translate key="plugins.themes.bootstrap3.article.sidebar"}</h2>

			{* Article/Issue cover image *}
			{if $article->getLocalizedCoverImage() || $issue->getLocalizedCoverImage()}
				<div class="cover-image">
					{if $article->getLocalizedCoverImage()}
						<img class="img-responsive" src="{$article->getLocalizedCoverImageUrl()|escape}"{if $article->getLocalizedCoverImageAltText()} alt="{$article->getLocalizedCoverImageAltText()|escape}"{/if}>
					{else}
						<a href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
							<img class="img-responsive" src="{$issue->getLocalizedCoverImageUrl()|escape}"{if $issue->getLocalizedCoverImageAltText()} alt="{$issue->getLocalizedCoverImageAltText()|escape}"{/if}>
						</a>
					{/if}
				</div>
			{/if}

			{* Article Galleys *}
			{if $primaryGalleys || $supplementaryGalleys}
				<div class="download">
					{if $primaryGalleys}
						{foreach from=$primaryGalleys item=galley}
							{include file="frontend/objects/galley_link.tpl" parent=$article purchaseFee=$currentJournal->getSetting('purchaseArticleFee') purchaseCurrency=$currentJournal->getSetting('currency')}
						{/foreach}
					{/if}
					{if $supplementaryGalleys}
						{foreach from=$supplementaryGalleys item=galley}
							{include file="frontend/objects/galley_link.tpl" parent=$article isSupplementary="1"}
						{/foreach}
					{/if}
				</div>
			{/if}

			<div class="list-group">

				{* Published date *}
				{if $article->getDatePublished()}
					<div class="list-group-item date-published">
						<strong>{translate key="submissions.published"}</strong>
						{$article->getDatePublished()|date_format}
					</div>
				{/if}

				{* DOI (requires plugin) *}
				{foreach from=$pubIdPlugins item=pubIdPlugin}
					{if $pubIdPlugin->getPubIdType() != 'doi'}
						{php}continue;{/php}
					{/if}
					{if $issue->getPublished()}
						{assign var=pubId value=$article->getStoredPubId($pubIdPlugin->getPubIdType())}
					{else}
						{assign var=pubId value=$pubIdPlugin->getPubId($article)}{* Preview pubId *}
					{/if}
					{if $pubId}
						{assign var="doiUrl" value=$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
						<div class="list-group-item doi">
							<strong>{translate key="plugins.pubIds.doi.readerDisplayName"}</strong>
							<a href="{$doiUrl}">
								{$doiUrl}
							</a>
						</div>
					{/if}
				{/foreach}
			</div>

		</section><!-- .article-sidebar -->

		<div class="col-md-8">
			<section class="article-main">

				{* Screen-reader heading for easier navigation jumps *}
				<h2 class="sr-only">{translate key="plugins.themes.bootstrap3.article.main"}</h2>

				{if $article->getAuthors()}
					<div class="authors">
						{foreach from=$article->getAuthors() item=author}
							<div class="author">
								<strong>{$author->getFullName()|escape}</strong>
								{if $author->getLocalizedAffiliation()}
									<div class="article-author-affilitation">
										{$author->getLocalizedAffiliation()|escape}
									</div>
								{/if}
								{if $author->getOrcid()}
									<div class="orcid">
										{$orcidIcon}
										<a href="{$author->getOrcid()|escape}" target="_blank">
											{$author->getOrcid()|escape}
										</a>
									</div>
								{/if}
							</div>
						{/foreach}
					</div>
				{/if}

				<div class="panel-group" id="accordion">
					{if $article->getLocalizedAbstract()}
						<div class="panel panel-default article-summary" id="summary">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">{translate key="article.abstract"}</a>
							</div>
							<div id="collapse1" class="panel-collapse collapse in">
								<div class="panel-body article-abstract"">{$article->getLocalizedAbstract()|strip_unsafe_html|nl2br}</div>
							</div>
						</div>
					{/if}

					{* Keywords *}
					{if !empty($keywords[$currentLocale])}
						<div class="panel panel-default article-references">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
									{translate key="article.subject"}
								</a>
							</div>
							<div id="collapse9" class="panel-collapse collapse ">
								<div class="panel-body article-references-content">
										{foreach from=$keywords item=keyword}
													{foreach name=keywords from=$keyword item=keywordItem}
														{$keywordItem|escape}{if !$smarty.foreach.keywords.last}, {/if}
													{/foreach}
										{/foreach}
								</div>
							</div>
						</div>
					{/if}

					{* Author biographies *}
					{assign var="hasBiographies" value=0}
					{foreach from=$article->getAuthors() item=author}
						{if $author->getLocalizedBiography()}
							{assign var="hasBiographies" value=$hasBiographies+1}
						{/if}
					{/foreach}
					{if $hasBiographies}
						<div class="panel panel-default author-bios">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
									{if $hasBiographies > 1}
										{translate key="submission.authorBiographies"}
									{else}
										{translate key="submission.authorBiography"}
									{/if}
								</a>
							</div>
							<div id="collapse7" class="panel-collapse collapse">
								<div class="panel-body">
									{foreach from=$article->getAuthors() item=author}
										<div class="media biography">
											<div class="media-body">
												<h3 class="media-heading biography-author">
													{if $author->getLocalizedAffiliation()}
														{capture assign="authorName"}{$author->getFullName()|escape}{/capture}
														{capture assign="authorAffiliation"}<span class="affiliation">{$author->getLocalizedAffiliation()|escape}</span>{/capture}
														{translate key="submission.authorWithAffiliation" name=$authorName affiliation=$authorAffiliation}
													{else}
														{$author->getFullName()|escape}
													{/if}
												</h3>
												{$author->getLocalizedBiography()|strip_unsafe_html}
											</div>
										</div>
									{/foreach}
								</div>
							</div>
						</div>
					{/if}

					{* Article Subject *}
					{if $article->getLocalizedSubject()}
						<div class="panel panel-default subject">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">{translate key="article.subject"}</a>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body">{$article->getLocalizedSubject()|escape}</div>
							</div>
						</div>
					{/if}
					
					{* How to cite *}
					{if $citation}
						<div class="panel panel-default how-to-cite">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">{translate key="submission.howToCite"}</a>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">
									<div id="citationOutput" role="region" aria-live="polite">
										{$citation}
									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-controls="cslCitationFormats">
											{translate key="submission.howToCite.citationFormats"}
												<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
												{foreach from=$citationStyles item="citationStyle"}
													<li>
														<a
															aria-controls="citationOutput"
															href="{url page="citationstylelanguage" op="get" path=$citationStyle.id params=$citationArgs}"
															data-load-citation
															data-json-href="{url page="citationstylelanguage" op="get" path=$citationStyle.id params=$citationArgsJson}"
														>
															{$citationStyle.title|escape}
														</a>
													</li>
												{/foreach}
										</ul>
									</div>
								</div>
							</div>
						</div>
					{/if}

					{* PubIds (requires plugins) *}
					{foreach from=$pubIdPlugins item=pubIdPlugin}
						{if $pubIdPlugin->getPubIdType() == 'doi'}
							{php}continue;{/php}
						{/if}
						{if $issue->getPublished()}
							{assign var=pubId value=$article->getStoredPubId($pubIdPlugin->getPubIdType())}
						{else}
							{assign var=pubId value=$pubIdPlugin->getPubId($article)}{* Preview pubId *}
						{/if}
						{if $pubId}
							<div class="panel panel-default pub_ids">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">{$pubIdPlugin->getPubIdDisplayType()|escape}</a>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										{if $pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
											<a id="pub-id::{$pubIdPlugin->getPubIdType()|escape}" href="{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}">
												{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
											</a>
										{else}
											{$pubId|escape}
										{/if}
									</div>
								</div>
							</div>
						{/if}
					{/foreach}

					<!--{* Metrics *}
					<div class="panel panel-default article-references">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
								{translate key="common.metric"}
							</a>
						</div>
						<div id="collapse10" class="panel-collapse collapse ">
							<div class="panel-body article-references-content">
								
							</div>
						</div>
					</div>-->

					{* Issue article appears in *}
					<div class="panel panel-default issue">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
								{translate key="issue.issue"}
							</a>
						</div>
						<div id="collapse5" class="panel-collapse collapse">
							<div class="panel-body">
								<a class="title" href="{url page="issue" op="view" path=$issue->getBestIssueId($currentJournal)}">{$issue->getIssueIdentification()}</a>
							</div>
						</div>
					</div>

					{if $section}
						<div class="panel panel-default section">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									{translate key="section.section"}
								</a>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
								<div class="panel-body">
									{$section->getLocalizedTitle()|escape}
								</div>
							</div>
						</div>
					{/if}

					{* References *}
					{if $article->getCitations()}
					<div class="panel panel-default article-references">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
								{translate key="submission.citations"}
							</a>
						</div>
						<div id="collapse8" class="panel-collapse collapse">
							<div class="panel-body article-references-content">
								{$article->getCitations()|nl2br}
							</div>
						</div>
					</div>
					{/if}
				</div> 
				{call_hook name="Templates::Article::Main"}

			</section><!-- .article-main -->

			<section class="article-more-details">

				{* Screen-reader heading for easier navigation jumps *}
				<h2 class="sr-only">{translate key="plugins.themes.bootstrap3.article.details"}</h2>

				{* Licensing info *}
				{if $copyright || $licenseUrl}
					<div class="panel panel-default copyright">
						<div class="panel-body">
							{if $licenseUrl}
								{if $ccLicenseBadge}
									{$ccLicenseBadge}
								{else}
									<a href="{$licenseUrl|escape}" class="copyright">
										{if $copyrightHolder}
											{translate key="submission.copyrightStatement" copyrightHolder=$copyrightHolder copyrightYear=$copyrightYear}
										{else}
											{translate key="submission.license"}
										{/if}
									</a>
								{/if}
							{/if}
							{$copyright}
						</div>
					</div>
				{/if}

				{call_hook name="Templates::Article::Details"}

			</section><!-- .article-details -->
		</div><!-- .col-md-8 -->
	</div><!-- .row -->

</article>
