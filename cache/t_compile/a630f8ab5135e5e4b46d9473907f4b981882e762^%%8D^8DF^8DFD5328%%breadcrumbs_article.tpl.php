<?php /* Smarty version 2.6.25-dev, created on 2019-06-13 15:42:43
         compiled from frontend/components/breadcrumbs_article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/breadcrumbs_article.tpl', 18, false),array('function', 'url', 'frontend/components/breadcrumbs_article.tpl', 21, false),array('modifier', 'escape', 'frontend/components/breadcrumbs_article.tpl', 39, false),)), $this); ?>

<nav class="cmp_breadcrumbs" role="navigation" aria-label="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.breadcrumbLabel"), $this);?>
">
	<ol class="breadcrumb">
		<li>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','router' => @ROUTE_PAGE), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.homepageNavigationLabel"), $this);?>

			</a>
		</li>
		<li>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive'), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>

			</a>
		</li>
		<li>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
">
				<?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

			</a>
		</li>
		<li class="active">
			<?php if ($this->_tpl_vars['currentTitleKey']): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['currentTitleKey']), $this);?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['currentTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			<?php endif; ?>
		</li>
	</ol>
</nav>