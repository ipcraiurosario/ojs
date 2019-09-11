{**
 * templates/frontend/pages/indexSite.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site index.
 *
 *}
{include file="frontend/components/header.tpl"}
	{if $about}
		<div class="row">
			<div class="about_site row">
                                <div class="col-md-2">
                                        <img src="/ojs3/public/site/logo-editorial.png" class="about_site_logo_editorial">
                                </div>
				<div class="col-md-10">
					{$about|nl2br}
				</div>
			</div>
		</div>
	{/if}
</main>
<br />
<main class="pkp_structure_main col-md-9">
	<div id="main-site" class="page_index_site">
		<div class="journals">
			<div class="page-header">
				<h2>
					{translate key="journal.journals"}
				</h2>
			</div>
			{if !count($journals)}
				<div class="no_journals">
					{translate key="site.noJournals"}
				</div>

			{else}
				<ul class="media-list">
					{assign var='cont' value=0}
					{iterate from=journals item=journal}
						{capture assign="url"}{url journal=$journal->getPath()}{/capture}
						{assign var="thumb" value=$journal->getLocalizedSetting('journalThumbnail')}
						{assign var="description" value=$journal->getLocalizedDescription()}
						{assign var='cont' value=$cont+1}
			                        {assign var='journalId' value=$journal->getId()}
						{assign var='additionalHomeContent' value=$journal->getLocalizedSetting('additionalHomeContent')}
						{if $cont==1}
							<div class="row">
						{else}
							{assign var='cont' value=0}
						{/if}

						<div class="col-sm-6">
							<table class="table-journal">
								<tr>
									<td>
										<a href="{$url|escape}" rel="bookmark">
											<img src="{$journalFilesPath}{$journalId}/{$my_issues[$journalId]}" title="{$journal->getLocalizedName()}" class="site-journal-cover-img">
										</a>
									</td>
									<td>
										<a href="{$url|escape}" rel="bookmark">
											{$journal->getLocalizedName()}
										</a>
										{if $additionalHomeContent}
											{$additionalHomeContent|nl2br}
										{/if}
									</td>
								</tr>
							</table>
						</div>
						{if $cont==0}
							</div>
							<br>
						{/if}
					{/iterate}
				</ul>

				{if $journals->getPageCount() > 0}
					<div class="cmp_pagination">
						{page_info iterator=$journals}
						{page_links anchor="journals" name="journals" iterator=$journals}
					</div>
				{/if}
			{/if}
		</div>

	</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
