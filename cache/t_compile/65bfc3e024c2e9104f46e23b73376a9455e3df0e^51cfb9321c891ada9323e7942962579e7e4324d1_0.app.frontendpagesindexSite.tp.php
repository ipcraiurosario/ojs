<?php
/* Smarty version 3.1.33, created on 2019-09-10 07:50:46
  from 'app:frontendpagesindexSite.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d779c267bfdd3_61162052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51cfb9321c891ada9323e7942962579e7e4324d1' => 
    array (
      0 => 'app:frontendpagesindexSite.tp',
      1 => 1567009239,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5d779c267bfdd3_61162052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['about']->value) {?>
		<div class="row">
			<div class="about_site row">
                                <div class="col-md-2">
                                        <img src="/ojs3/public/site/logo-editorial.png" class="about_site_logo_editorial">
                                </div>
				<div class="col-md-10">
					<?php echo nl2br($_smarty_tpl->tpl_vars['about']->value);?>

				</div>
			</div>
		</div>
	<?php }?>
</main>
<br />
<main class="pkp_structure_main col-md-9">
	<div id="main-site" class="page_index_site">
		<div class="journals">
			<div class="page-header">
				<h2>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.journals"),$_smarty_tpl ) );?>

				</h2>
			</div>
			<?php if (!count($_smarty_tpl->tpl_vars['journals']->value)) {?>
				<div class="no_journals">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.noJournals"),$_smarty_tpl ) );?>

				</div>

			<?php } else { ?>
				<ul class="media-list">
					<?php $_smarty_tpl->_assignInScope('cont', 0);?>
					<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'journals','item'=>'journal'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'journals','item'=>'journal'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "url", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<?php $_smarty_tpl->_assignInScope('thumb', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedSetting('journalThumbnail'));?>
						<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedDescription());?>
						<?php $_smarty_tpl->_assignInScope('cont', $_smarty_tpl->tpl_vars['cont']->value+1);?>
			                        <?php $_smarty_tpl->_assignInScope('journalId', $_smarty_tpl->tpl_vars['journal']->value->getId());?>
						<?php $_smarty_tpl->_assignInScope('additionalHomeContent', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedSetting('additionalHomeContent'));?>
						<?php if ($_smarty_tpl->tpl_vars['cont']->value == 1) {?>
							<div class="row">
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('cont', 0);?>
						<?php }?>

						<div class="col-sm-6">
							<table class="table-journal">
								<tr>
									<td>
										<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value ));?>
" rel="bookmark">
											<img src="<?php echo $_smarty_tpl->tpl_vars['journalFilesPath']->value;
echo $_smarty_tpl->tpl_vars['journalId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['my_issues']->value[$_smarty_tpl->tpl_vars['journalId']->value];?>
" title="<?php echo $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName();?>
" class="site-journal-cover-img">
										</a>
									</td>
									<td>
										<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value ));?>
" rel="bookmark">
											<?php echo $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName();?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['additionalHomeContent']->value) {?>
											<?php echo nl2br($_smarty_tpl->tpl_vars['additionalHomeContent']->value);?>

										<?php }?>
									</td>
								</tr>
							</table>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['cont']->value == 0) {?>
							</div>
							<br>
						<?php }?>
					<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'journals','item'=>'journal'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</ul>

				<?php if ($_smarty_tpl->tpl_vars['journals']->value->getPageCount() > 0) {?>
					<div class="cmp_pagination">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_info'][0], array( array('iterator'=>$_smarty_tpl->tpl_vars['journals']->value),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"journals",'name'=>"journals",'iterator'=>$_smarty_tpl->tpl_vars['journals']->value),$_smarty_tpl ) );?>

					</div>
				<?php }?>
			<?php }?>
		</div>

	</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
