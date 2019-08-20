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
		<div class="about_site">
			{$about|nl2br}
		</div>
	{/if}
</main>
<br />

<main class="pkp_structure_main col-md-9">
	<div id="main-site" class="page_index_site">
		<div class="journals">

			{if !count($journals)}
				<div class="no_journals">
					{translate key="site.noJournals"}
				</div>

			{else}
					{assign var='cont' value=0}
					{iterate from=journals item=journal}
						{capture assign="url"}{url journal=$journal->getPath()}{/capture}
						{assign var="thumb" value=$journal->getLocalizedSetting('coverImage')}
						{assign var="description" value=$journal->getLocalizedDescription()}
						{assign var='cont' value=$cont+1}
                                                {assign var='journalId' value=$journal->getId()}
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
												{if $description}
													{$description|nl2br}
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
					{if $cont==1}
							<div class="col-sm-6"></div>
						</div>
					{/if}

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
