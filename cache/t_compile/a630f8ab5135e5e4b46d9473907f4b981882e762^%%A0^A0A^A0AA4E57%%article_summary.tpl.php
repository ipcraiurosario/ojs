<?php /* Smarty version 2.6.25-dev, created on 2019-06-13 15:42:17
         compiled from frontend/objects/article_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/article_summary.tpl', 25, false),array('function', 'call_hook', 'frontend/objects/article_summary.tpl', 83, false),array('modifier', 'escape', 'frontend/objects/article_summary.tpl', 26, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/article_summary.tpl', 34, false),)), $this); ?>
<?php $this->assign('articlePath', $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])); ?>
<?php if (( ! $this->_tpl_vars['section']['hideAuthor'] && $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_DEFAULT ) || $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_SHOW): ?>
	<?php $this->assign('showAuthor', true); ?>
<?php endif; ?>

<div class="article-summary media">
	<?php if ($this->_tpl_vars['article']->getLocalizedCoverImage()): ?>
		<div class="cover media-left">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
" class="file">
				<img class="media-object" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImageUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
			</a>
		</div>
	<?php endif; ?>

	<div class="media-body">
		<h3 class="media-heading">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

				<?php if ($this->_tpl_vars['article']->getLocalizedSubtitle()): ?>
					<p>
						<small><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubtitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</small>
					</p>
				<?php endif; ?>
			</a>
		</h3>

		<?php if ($this->_tpl_vars['showAuthor'] || $this->_tpl_vars['article']->getPages()): ?>

			<?php if ($this->_tpl_vars['showAuthor']): ?>
				<div class="meta">
					<?php if ($this->_tpl_vars['showAuthor']): ?>
						<div class="authors">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['article']->getPages()): ?>
				<p class="pages">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

				</p>
			<?php endif; ?>

		<?php endif; ?>

		<?php if (! $this->_tpl_vars['hideGalleys'] && $this->_tpl_vars['article']->getGalleys()): ?>
			<div class="btn-group" role="group">
				<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
					<?php if ($this->_tpl_vars['primaryGenreIds']): ?>
						<?php $this->assign('file', $this->_tpl_vars['galley']->getFile()); ?>
						<?php if (! $this->_tpl_vars['galley']->getRemoteUrl() && ! ( $this->_tpl_vars['file'] && in_array ( $this->_tpl_vars['file']->getGenreId() , $this->_tpl_vars['primaryGenreIds'] ) )): ?>
							<?php continue; ?>
						<?php endif; ?>
					<?php endif; ?>
					<?php $this->assign('hasArticleAccess', $this->_tpl_vars['hasAccess']); ?>
					<?php if (( $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN )): ?>
						<?php $this->assign('hasArticleAccess', 1); ?>
					<?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['article'],'hasAccess' => $this->_tpl_vars['hasArticleAccess'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
	</div>

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Issue::Issue::Article"), $this);?>

</div><!-- .article-summary -->