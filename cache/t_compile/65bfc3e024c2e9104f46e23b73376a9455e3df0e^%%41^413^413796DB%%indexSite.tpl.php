<?php /* Smarty version 2.6.25-dev, created on 2019-06-14 07:21:17
         compiled from frontend/pages/indexSite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'frontend/pages/indexSite.tpl', 14, false),array('modifier', 'escape', 'frontend/pages/indexSite.tpl', 46, false),array('function', 'translate', 'frontend/pages/indexSite.tpl', 26, false),array('function', 'url', 'frontend/pages/indexSite.tpl', 32, false),array('function', 'page_info', 'frontend/pages/indexSite.tpl', 73, false),array('function', 'page_links', 'frontend/pages/indexSite.tpl', 74, false),array('block', 'iterate', 'frontend/pages/indexSite.tpl', 31, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php if ($this->_tpl_vars['about']): ?>
		<div class="about_site">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['about'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

		</div>
	<?php endif; ?>
</main>
<br />

<main class="pkp_structure_main col-md-9">
	<div id="main-site" class="page_index_site">
		<div class="journals">

			<?php if (! count ( $this->_tpl_vars['journals'] )): ?>
				<div class="no_journals">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.noJournals"), $this);?>

				</div>

			<?php else: ?>
					<?php $this->assign('cont', 0); ?>
					<?php $this->_tag_stack[] = array('iterate', array('from' => 'journals','item' => 'journal')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath()), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('url', ob_get_contents());ob_end_clean(); ?>
						<?php $this->assign('thumb', $this->_tpl_vars['journal']->getLocalizedSetting('coverImage')); ?>
						<?php $this->assign('description', $this->_tpl_vars['journal']->getLocalizedDescription()); ?>
						<?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
                                                <?php $this->assign('journalId', $this->_tpl_vars['journal']->getId()); ?>
						<?php if ($this->_tpl_vars['cont'] == 1): ?>
							<div class="row">
						<?php else: ?>
							<?php $this->assign('cont', 0); ?>
						<?php endif; ?>
								<div class="col-sm-6">
									<table class="table-journal">
										<tr>
											<td>
												<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" rel="bookmark">
													<img src="<?php echo $this->_tpl_vars['journalFilesPath']; ?>
<?php echo $this->_tpl_vars['journalId']; ?>
/<?php echo $this->_tpl_vars['my_issues'][$this->_tpl_vars['journalId']]; ?>
" title="<?php echo $this->_tpl_vars['journal']->getLocalizedName(); ?>
" class="site-journal-cover-img">
												</a>
											</td>
											<td>
												<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" rel="bookmark">
													<?php echo $this->_tpl_vars['journal']->getLocalizedName(); ?>

												</a>
												<?php if ($this->_tpl_vars['description']): ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

												<?php endif; ?>
											</td>
										</tr>
									</table>
								</div>
						<?php if ($this->_tpl_vars['cont'] == 0): ?>
							</div>
							<br>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php if ($this->_tpl_vars['cont'] == 1): ?>
							<div class="col-sm-6"></div>
						</div>
					<?php endif; ?>

				<?php if ($this->_tpl_vars['journals']->getPageCount() > 0): ?>
					<div class="cmp_pagination">
						<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['journals']), $this);?>

						<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'journals','name' => 'journals','iterator' => $this->_tpl_vars['journals']), $this);?>

					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>

	</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>