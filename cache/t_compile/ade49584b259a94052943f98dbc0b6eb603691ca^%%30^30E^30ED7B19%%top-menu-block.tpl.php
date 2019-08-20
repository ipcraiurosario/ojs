<?php /* Smarty version 2.6.25-dev, created on 2019-06-14 07:21:17
         compiled from frontend/custom/top-menu-block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'frontend/custom/top-menu-block.tpl', 1, false),array('function', 'translate', 'frontend/custom/top-menu-block.tpl', 5, false),array('function', 'url', 'frontend/custom/top-menu-block.tpl', 11, false),)), $this); ?>
<?php if (count($this->_tpl_vars['supportedLocales'])): ?>
	<ul class="nav nav-pills tab-list pull-right">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.language"), $this);?>

				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<?php $_from = $this->_tpl_vars['supportedLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
					<li>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'setLocale','path' => $this->_tpl_vars['localeKey'],'source' => $_SERVER['REQUEST_URI']), $this);?>
">
							<?php echo $this->_tpl_vars['localeName']; ?>

						</a>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</li>
	</ul>
<?php endif; ?>