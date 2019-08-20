<?php /* Smarty version 2.6.25-dev, created on 2019-06-13 15:42:18
         compiled from frontend/components/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'frontend/components/footer.tpl', 19, false),array('function', 'translate', 'frontend/components/footer.tpl', 21, false),array('function', 'load_script', 'frontend/components/footer.tpl', 78, false),array('modifier', 'escape', 'frontend/components/footer.tpl', 21, false),)), $this); ?>

	</main>

		<?php if (empty ( $this->_tpl_vars['isFullWidth'] )): ?>
		<?php ob_start(); ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Sidebar"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('sidebarCode', ob_get_contents());ob_end_clean(); ?>
		<?php if ($this->_tpl_vars['sidebarCode']): ?>
			<aside id="sidebar" class="pkp_structure_sidebar left col-md-3" role="complementary" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.sidebar"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
">
				<?php echo $this->_tpl_vars['sidebarCode']; ?>

			</aside><!-- pkp_sidebar.left -->
		<?php endif; ?>
	<?php endif; ?>
	</div><!-- pkp_structure_content -->

	<div class="footer-logos">

		<div class="container text-center">
			<a href="http://editorial.urosario.edu.co/">
				<img class="img-responsive" alt="Editorial" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/custom/logo-editorial.png">
			</a>
			<a href="http://repository.urosario.edu.co/">
				<img class="img-responsive" alt="EdocUR" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/custom/logo-edocur.png">
			</a>
			<a href="http://repository.urosario.edu.co/handle/10336/12300/">
				<img class="img-responsive" alt="Acceso abierto" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/custom/logo-acceso-abierto.png">
			</a>
		</div><!-- .container -->
	</div>

	<footer class="footer" role="contentinfo">

		<div class="container">

			<div class="row">
				
				<div class="col-md-10 text-center">
					<?php if ($this->_tpl_vars['pageFooter']): ?>
						<?php echo $this->_tpl_vars['pageFooter']; ?>


					<?php else: ?>
						<span style="font-style: italic;">Universidad del Rosario - 2019</span>
						<br>
						<a href="http://creativecommons.org/licenses/by-nc/4.0/" target="_blank">
							<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/custom/ccbync.png" alt="">
						</a>
						<br>
						Todos los documentos publicados en esta revista se distribuyen, a partir del año 2015, bajo una
						<br>
						<a href="http://creativecommons.org/licenses/by-nc/4.0/" rel="license">licencia de Creative Commons Reconocimiento-NoComercial 4.0 Internacional</a>.
					<?php endif; ?>
				</div>

				<div class="col-md-2 blq-gestion-crai" role="complementary">
					<span>Gestionado por:</span>
					<a href="http://crai.urosario.edu.co/">
						<img class="img-responsive" alt="CRAI" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/custom/logo-crai.png">
					</a>
				</div>

			</div> <!-- .row -->
		</div><!-- .container -->
	</footer>
</div><!-- pkp_structure_page -->

<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'frontend','scripts' => $this->_tpl_vars['scripts']), $this);?>


<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
</body>
</html>