<?php /* Smarty version 2.6.25-dev, created on 2019-06-13 15:42:17
         compiled from frontend/objects/announcement_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/announcement_summary.tpl', 15, false),array('modifier', 'escape', 'frontend/objects/announcement_summary.tpl', 16, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/announcement_summary.tpl', 23, false),)), $this); ?>
<article class="announcement-summary media">
	<div class="media-body">
		<h2 class="media-heading">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'announcement','op' => 'view','path' => $this->_tpl_vars['announcement']->getId()), $this);?>
">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			</a>
		</h2>
		<p class="date">
			<span class="glyphicon glyphicon-calendar"></span>
			<?php echo $this->_tpl_vars['announcement']->getDatePosted(); ?>

		</p>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescriptionShort())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

	</div>
</article><!-- .announcement-summary -->