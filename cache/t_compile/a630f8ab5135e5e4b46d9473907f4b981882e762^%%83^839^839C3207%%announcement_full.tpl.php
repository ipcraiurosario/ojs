<?php /* Smarty version 2.6.25-dev, created on 2019-08-01 07:54:32
         compiled from frontend/objects/announcement_full.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/objects/announcement_full.tpl', 21, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/announcement_full.tpl', 26, false),)), $this); ?>

<article class="announcement-full">
	<header class="page-header">
		<h1>
			<?php echo $this->_tpl_vars['announcement']->getLocalizedTitle(); ?>

		</h1>
		<small class="date">
			<span class="glyphicon glyphicon-calendar"></span>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.postedOn",'postDate' => $this->_tpl_vars['announcement']->getDatePosted()), $this);?>

		</small>
	</header>
	<div class="description">
		<?php if ($this->_tpl_vars['announcement']->getLocalizedDescription()): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescriptionShort())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

		<?php endif; ?>
	</div>
</article><!-- .announcement-full" -->