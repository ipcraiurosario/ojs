<?php /* Smarty version 2.6.25-dev, created on 2019-06-28 08:58:45
         compiled from frontend/pages/issueArchive.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/issueArchive.tpl', 19, false),array('function', 'url', 'frontend/pages/issueArchive.tpl', 46, false),array('modifier', 'assign', 'frontend/pages/issueArchive.tpl', 46, false),)), $this); ?>
<?php ob_start(); ?>
	<?php if ($this->_tpl_vars['prevPage']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "archive.archivesPageNumber",'pageNumber' => $this->_tpl_vars['prevPage']+1), $this);?>

	<?php else: ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "archive.archives"), $this);?>

	<?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('pageTitle', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => $this->_tpl_vars['pageTitle'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</main>
<main class="pkp_structure_main col-md-9" role="main">
	<div id="main-content" class="page page_issue_archive">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitle' => $this->_tpl_vars['pageTitle'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<?php if (empty ( $this->_tpl_vars['issues'] )): ?>
			<div class="alert alert-info" role="alert">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>

			</div>
		<?php else: ?>

						<div class="issues media-list">
				<?php $_from = $this->_tpl_vars['issues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['issue']):
?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/issue_summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>

						<?php if ($this->_tpl_vars['prevPage'] > 1): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive','path' => $this->_tpl_vars['prevPage']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'prevUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'prevUrl'));?>

			<?php elseif ($this->_tpl_vars['prevPage'] === 1): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'prevUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'prevUrl'));?>

			<?php endif; ?>
			<?php if ($this->_tpl_vars['nextPage']): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive','path' => $this->_tpl_vars['nextPage']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'nextUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'nextUrl'));?>

			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/pagination.tpl", 'smarty_include_vars' => array('prevUrl' => $this->_tpl_vars['prevUrl'],'nextUrl' => $this->_tpl_vars['nextUrl'],'showingStart' => $this->_tpl_vars['showingStart'],'showingEnd' => $this->_tpl_vars['showingEnd'],'total' => $this->_tpl_vars['total'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</div>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/frontend/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>