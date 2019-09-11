{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

	</main>

	{* Sidebars *}
	{if empty($isFullWidth)}
		{capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
		{if $sidebarCode}
			<aside id="sidebar" class="pkp_structure_sidebar left col-md-3" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
				{$sidebarCode}
			</aside><!-- pkp_sidebar.left -->
		{/if}
	{/if}
	</div><!-- pkp_structure_content -->

	<div class="footer-logos">
		<div class="container text-center">
			<!-- Ocultar logo de la editorial para ser incluido en la pagina principal en la descripcion del sitio
			<a href="http://editorial.urosario.edu.co/">
				<img class="img-responsive" alt="Editorial" src="{$baseUrl}/templates/images/custom/logo-editorial.png">
			</a>-->
			<a href="http://repository.urosario.edu.co/">
				<img class="img-responsive" alt="EdocUR" src="{$baseUrl}/templates/images/custom/logo-edocur.png">
			</a>
			<a href="http://repository.urosario.edu.co/handle/10336/12300/">
				<img class="img-responsive" alt="Acceso abierto" src="{$baseUrl}/templates/images/custom/logo-acceso-abierto.png">
			</a>
		</div><!-- .container -->
	</div>

	<footer class="footer" role="contentinfo">

		<div class="container">

			<div class="row">
				<div class="col-md-10 text-center">
					{if $pageFooter}
						{$pageFooter}
					{else}
						<span style="font-style: italic;">Universidad del Rosario - 2019</span>
						<br>
						<a href="http://creativecommons.org/licenses/by-nc/4.0/" target="_blank">
							<img src="{$baseUrl}/templates/images/custom/ccbync.png" alt="">
						</a>
						<br>
						Todos los documentos publicados en esta revista se distribuyen, a partir del año 2015, bajo una
						<br>
						<a href="http://creativecommons.org/licenses/by-nc/4.0/" rel="license">licencia de Creative Commons Reconocimiento-NoComercial 4.0 Internacional</a>.
					{/if}
				</div>
				<div class="col-md-2 blq-gestion-crai" role="complementary">
					<span>Gestionado por:</span>
					<a href="http://crai.urosario.edu.co/">
						<img class="img-responsive" alt="CRAI" src="{$baseUrl}/templates/images/custom/logo-crai.png">
					</a>
				</div>

			</div> <!-- .row -->
		</div><!-- .container -->
	</footer>
</div><!-- pkp_structure_page -->

{load_script context="frontend" scripts=$scripts}

{call_hook name="Templates::Common::Footer::PageFooter"}
<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>
