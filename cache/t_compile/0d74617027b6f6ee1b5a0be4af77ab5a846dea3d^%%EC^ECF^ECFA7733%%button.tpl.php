<?php /* Smarty version 2.6.25-dev, created on 2019-06-14 07:27:15
         compiled from form/button.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'form/button.tpl', 12, false),)), $this); ?>
<?php echo '<button class="pkp_button '; ?><?php echo $this->_tpl_vars['FBV_class']; ?><?php echo '" type="'; ?><?php echo $this->_tpl_vars['FBV_type']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?><?php echo ' disabled="disabled"'; ?><?php endif; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['FBV_buttonParams']; ?><?php echo '>'; ?><?php if ($this->_tpl_vars['FBV_translate']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_label']), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['FBV_label']; ?><?php echo ''; ?><?php endif; ?><?php echo '</button>'; ?>
