<?php /* Smarty version 2.6.25-dev, created on 2019-08-15 11:37:48
         compiled from controllers/tab/workflow/stageParticipants.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/workflow/stageParticipants.tpl', 10, false),array('function', 'load_url_in_div', 'controllers/tab/workflow/stageParticipants.tpl', 11, false),array('modifier', 'assign', 'controllers/tab/workflow/stageParticipants.tpl', 10, false),array('modifier', 'concat', 'controllers/tab/workflow/stageParticipants.tpl', 11, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.stageParticipant.StageParticipantGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'stageParticipantGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'stageParticipantGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp="stageParticipantGridContainer-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'url' => $this->_tpl_vars['stageParticipantGridUrl'],'class' => 'pkp_participants_grid'), $this);?>
