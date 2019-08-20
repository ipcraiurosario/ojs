<?php /* Smarty version 2.6.25-dev, created on 2019-06-17 07:57:59
         compiled from frontend/objects/article_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/objects/article_details.tpl', 21, false),array('modifier', 'date_format', 'frontend/objects/article_details.tpl', 72, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/article_details.tpl', 136, false),array('modifier', 'nl2br', 'frontend/objects/article_details.tpl', 136, false),array('function', 'translate', 'frontend/objects/article_details.tpl', 35, false),array('function', 'url', 'frontend/objects/article_details.tpl', 43, false),array('function', 'call_hook', 'frontend/objects/article_details.tpl', 339, false),)), $this); ?>
<article class="article-details">
	<header>
		<h1 class="page-header">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			<?php if ($this->_tpl_vars['article']->getLocalizedSubtitle()): ?>
				<small>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubtitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

				</small>
			<?php endif; ?>
		</h1>
	</header>

	<div class="row">

		<section class="article-sidebar col-md-4">

						<h2 class="sr-only"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.bootstrap3.article.sidebar"), $this);?>
</h2>

						<?php if ($this->_tpl_vars['article']->getLocalizedCoverImage() || $this->_tpl_vars['issue']->getLocalizedCoverImage()): ?>
				<div class="cover-image">
					<?php if ($this->_tpl_vars['article']->getLocalizedCoverImage()): ?>
						<img class="img-responsive" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImageUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['article']->getLocalizedCoverImageAltText()): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>>
					<?php else: ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
">
							<img class="img-responsive" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverImageUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['issue']->getLocalizedCoverImageAltText()): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['primaryGalleys'] || $this->_tpl_vars['supplementaryGalleys']): ?>
				<div class="download">
					<?php if ($this->_tpl_vars['primaryGalleys']): ?>
						<?php $_from = $this->_tpl_vars['primaryGalleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['article'],'purchaseFee' => $this->_tpl_vars['currentJournal']->getSetting('purchaseArticleFee'),'purchaseCurrency' => $this->_tpl_vars['currentJournal']->getSetting('currency'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['supplementaryGalleys']): ?>
						<?php $_from = $this->_tpl_vars['supplementaryGalleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['article'],'isSupplementary' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<div class="list-group">

								<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
					<div class="list-group-item date-published">
						<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>
</strong>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

					</div>
				<?php endif; ?>

								<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
					<?php if ($this->_tpl_vars['pubIdPlugin']->getPubIdType() != 'doi'): ?>
						<?php continue; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
						<?php $this->assign('pubId', $this->_tpl_vars['article']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())); ?>
					<?php else: ?>
						<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['article'])); ?>					<?php endif; ?>
					<?php if ($this->_tpl_vars['pubId']): ?>
						<?php $this->assign('doiUrl', ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
						<div class="list-group-item doi">
							<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.readerDisplayName"), $this);?>
</strong>
							<a href="<?php echo $this->_tpl_vars['doiUrl']; ?>
">
								<?php echo $this->_tpl_vars['doiUrl']; ?>

							</a>
						</div>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>

		</section><!-- .article-sidebar -->

		<div class="col-md-8">
			<section class="article-main">

								<h2 class="sr-only"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.bootstrap3.article.main"), $this);?>
</h2>

				<?php if ($this->_tpl_vars['article']->getAuthors()): ?>
					<div class="authors">
						<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
							<div class="author">
								<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong>
								<?php if ($this->_tpl_vars['author']->getLocalizedAffiliation()): ?>
									<div class="article-author-affilitation">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

									</div>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['author']->getOrcid()): ?>
									<div class="orcid">
										<?php echo $this->_tpl_vars['orcidIcon']; ?>

										<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getOrcid())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" target="_blank">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getOrcid())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

										</a>
									</div>
								<?php endif; ?>
							</div>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>

				<div class="panel-group" id="accordion">
					<?php if ($this->_tpl_vars['article']->getLocalizedAbstract()): ?>
						<div class="panel panel-default article-summary" id="summary">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</a>
							</div>
							<div id="collapse1" class="panel-collapse collapse in">
								<div class="panel-body article-abstract""><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
							</div>
						</div>
					<?php endif; ?>

										<?php if (! empty ( $this->_tpl_vars['keywords'][$this->_tpl_vars['currentLocale']] )): ?>
						<div class="panel panel-default article-references">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>

								</a>
							</div>
							<div id="collapse9" class="panel-collapse collapse ">
								<div class="panel-body article-references-content">
										<?php $_from = $this->_tpl_vars['keywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyword']):
?>
													<?php $_from = $this->_tpl_vars['keyword']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['keywords'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['keywords']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['keywordItem']):
        $this->_foreach['keywords']['iteration']++;
?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['keywordItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (! ($this->_foreach['keywords']['iteration'] == $this->_foreach['keywords']['total'])): ?>, <?php endif; ?>
													<?php endforeach; endif; unset($_from); ?>
										<?php endforeach; endif; unset($_from); ?>
								</div>
							</div>
						</div>
					<?php endif; ?>

										<?php $this->assign('hasBiographies', 0); ?>
					<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
						<?php if ($this->_tpl_vars['author']->getLocalizedBiography()): ?>
							<?php $this->assign('hasBiographies', $this->_tpl_vars['hasBiographies']+1); ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					<?php if ($this->_tpl_vars['hasBiographies']): ?>
						<div class="panel panel-default author-bios">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
									<?php if ($this->_tpl_vars['hasBiographies'] > 1): ?>
										<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorBiographies"), $this);?>

									<?php else: ?>
										<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorBiography"), $this);?>

									<?php endif; ?>
								</a>
							</div>
							<div id="collapse7" class="panel-collapse collapse">
								<div class="panel-body">
									<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
										<div class="media biography">
											<div class="media-body">
												<h3 class="media-heading biography-author">
													<?php if ($this->_tpl_vars['author']->getLocalizedAffiliation()): ?>
														<?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('authorName', ob_get_contents());ob_end_clean(); ?>
														<?php ob_start(); ?><span class="affiliation"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('authorAffiliation', ob_get_contents());ob_end_clean(); ?>
														<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorWithAffiliation",'name' => $this->_tpl_vars['authorName'],'affiliation' => $this->_tpl_vars['authorAffiliation']), $this);?>

													<?php else: ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

													<?php endif; ?>
												</h3>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedBiography())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

											</div>
										</div>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							</div>
						</div>
					<?php endif; ?>

										<?php if ($this->_tpl_vars['article']->getLocalizedSubject()): ?>
						<div class="panel panel-default subject">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>
</a>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</div>
							</div>
						</div>
					<?php endif; ?>
					
										<?php if ($this->_tpl_vars['citation']): ?>
						<div class="panel panel-default how-to-cite">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.howToCite"), $this);?>
</a>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">
									<div id="citationOutput" role="region" aria-live="polite">
										<?php echo $this->_tpl_vars['citation']; ?>

									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-controls="cslCitationFormats">
											<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.howToCite.citationFormats"), $this);?>

												<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
												<?php $_from = $this->_tpl_vars['citationStyles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['citationStyle']):
?>
													<li>
														<a
															aria-controls="citationOutput"
															href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'citationstylelanguage','op' => 'get','path' => $this->_tpl_vars['citationStyle']['id'],'params' => $this->_tpl_vars['citationArgs']), $this);?>
"
															data-load-citation
															data-json-href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'citationstylelanguage','op' => 'get','path' => $this->_tpl_vars['citationStyle']['id'],'params' => $this->_tpl_vars['citationArgsJson']), $this);?>
"
														>
															<?php echo ((is_array($_tmp=$this->_tpl_vars['citationStyle']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

														</a>
													</li>
												<?php endforeach; endif; unset($_from); ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>

										<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
						<?php if ($this->_tpl_vars['pubIdPlugin']->getPubIdType() == 'doi'): ?>
							<?php continue; ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
							<?php $this->assign('pubId', $this->_tpl_vars['article']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())); ?>
						<?php else: ?>
							<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['article'])); ?>						<?php endif; ?>
						<?php if ($this->_tpl_vars['pubId']): ?>
							<div class="panel panel-default pub_ids">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<?php if (((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))): ?>
											<a id="pub-id::<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

											</a>
										<?php else: ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['pubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>

					<!--					<div class="panel panel-default article-references">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
								<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.metric"), $this);?>

							</a>
						</div>
						<div id="collapse10" class="panel-collapse collapse ">
							<div class="panel-body article-references-content">
								
							</div>
						</div>
					</div>-->

										<div class="panel panel-default issue">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
								<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>

							</a>
						</div>
						<div id="collapse5" class="panel-collapse collapse">
							<div class="panel-body">
								<a class="title" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
"><?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>
</a>
							</div>
						</div>
					</div>

					<?php if ($this->_tpl_vars['section']): ?>
						<div class="panel panel-default section">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>

								</a>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

								</div>
							</div>
						</div>
					<?php endif; ?>

										<?php if ($this->_tpl_vars['article']->getCitations()): ?>
					<div class="panel panel-default article-references">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
								<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations"), $this);?>

							</a>
						</div>
						<div id="collapse8" class="panel-collapse collapse">
							<div class="panel-body article-references-content">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCitations())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

							</div>
						</div>
					</div>
					<?php endif; ?>
				</div> 
				<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Article::Main"), $this);?>


			</section><!-- .article-main -->

			<section class="article-more-details">

								<h2 class="sr-only"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.bootstrap3.article.details"), $this);?>
</h2>

								<?php if ($this->_tpl_vars['copyright'] || $this->_tpl_vars['licenseUrl']): ?>
					<div class="panel panel-default copyright">
						<div class="panel-body">
							<?php if ($this->_tpl_vars['licenseUrl']): ?>
								<?php if ($this->_tpl_vars['ccLicenseBadge']): ?>
									<?php echo $this->_tpl_vars['ccLicenseBadge']; ?>

								<?php else: ?>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['licenseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="copyright">
										<?php if ($this->_tpl_vars['copyrightHolder']): ?>
											<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightStatement",'copyrightHolder' => $this->_tpl_vars['copyrightHolder'],'copyrightYear' => $this->_tpl_vars['copyrightYear']), $this);?>

										<?php else: ?>
											<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.license"), $this);?>

										<?php endif; ?>
									</a>
								<?php endif; ?>
							<?php endif; ?>
							<?php echo $this->_tpl_vars['copyright']; ?>

						</div>
					</div>
				<?php endif; ?>

				<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Article::Details"), $this);?>


			</section><!-- .article-details -->
		</div><!-- .col-md-8 -->
	</div><!-- .row -->

</article>