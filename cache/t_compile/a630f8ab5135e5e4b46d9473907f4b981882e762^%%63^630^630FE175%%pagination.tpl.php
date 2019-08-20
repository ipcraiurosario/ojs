<?php /* Smarty version 2.6.25-dev, created on 2019-06-28 08:58:45
         compiled from frontend/components/pagination.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/pagination.tpl', 18, false),array('modifier', 'escape', 'frontend/components/pagination.tpl', 18, false),)), $this); ?>

<?php if ($this->_tpl_vars['prevUrl'] || $this->_tpl_vars['nextUrl']): ?>
	<nav aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pagination.label"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
">
		<ul class="pager">
			<?php if ($this->_tpl_vars['prevUrl']): ?>
				<li class="previous">
					<a href="<?php echo $this->_tpl_vars['prevUrl']; ?>
">
						<span aria-hidden="true">&larr;</span>
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.previous"), $this);?>

					</a>
				</li>
			<?php endif; ?>
			<li class="current">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pagination",'start' => $this->_tpl_vars['showingStart'],'end' => $this->_tpl_vars['showingEnd'],'total' => $this->_tpl_vars['total']), $this);?>

			</li>
			<?php if ($this->_tpl_vars['nextUrl']): ?>
			<li class="next">
				<a class="next" href="<?php echo $this->_tpl_vars['nextUrl']; ?>
">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.next"), $this);?>

					<span aria-hidden="true">&rarr;</span>
				</a>
			</li>
			<?php endif; ?>
		</ul>
	</nav>
<?php endif; ?>