<?php
/* Smarty version 3.1.33, created on 2019-09-10 07:50:46
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d779c268ab8a8_46081586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1567688975,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d779c268ab8a8_46081586 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</main>

		<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
			<aside id="sidebar" class="pkp_structure_sidebar left col-md-3" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
				<?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

			</aside><!-- pkp_sidebar.left -->
		<?php }?>
	<?php }?>
	</div><!-- pkp_structure_content -->

	<div class="footer-logos">
		<div class="container text-center">
			<!-- Ocultar logo de la editorial para ser incluido en la pagina principal en la descripcion del sitio
			<a href="http://editorial.urosario.edu.co/">
				<img class="img-responsive" alt="Editorial" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/custom/logo-editorial.png">
			</a>-->
			<a href="http://repository.urosario.edu.co/">
				<img class="img-responsive" alt="EdocUR" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/custom/logo-edocur.png">
			</a>
			<a href="http://repository.urosario.edu.co/handle/10336/12300/">
				<img class="img-responsive" alt="Acceso abierto" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/custom/logo-acceso-abierto.png">
			</a>
		</div><!-- .container -->
	</div>

	<footer class="footer" role="contentinfo">

		<div class="container">

			<div class="row">
				<div class="col-md-10 text-center">
					<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

					<?php } else { ?>
						<span style="font-style: italic;">Universidad del Rosario - 2019</span>
						<br>
						<a href="http://creativecommons.org/licenses/by-nc/4.0/" target="_blank">
							<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/custom/ccbync.png" alt="">
						</a>
						<br>
						Todos los documentos publicados en esta revista se distribuyen, a partir del año 2015, bajo una
						<br>
						<a href="http://creativecommons.org/licenses/by-nc/4.0/" rel="license">licencia de Creative Commons Reconocimiento-NoComercial 4.0 Internacional</a>.
					<?php }?>
				</div>
				<div class="col-md-2 blq-gestion-crai" role="complementary">
					<span>Gestionado por:</span>
					<a href="http://crai.urosario.edu.co/">
						<img class="img-responsive" alt="CRAI" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/custom/logo-crai.png">
					</a>
				</div>

			</div> <!-- .row -->
		</div><!-- .container -->
	</footer>
</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

<?php echo '<script'; ?>
 async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
