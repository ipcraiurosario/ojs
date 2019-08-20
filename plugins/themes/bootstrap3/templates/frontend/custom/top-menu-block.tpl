{if $supportedLocales|@count}
	<ul class="nav nav-pills tab-list pull-right">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				{translate key="common.language"}
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				{foreach from=$supportedLocales item=localeName key=localeKey}
					<li>
						<a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="setLocale" path=$localeKey source=$smarty.server.REQUEST_URI}">
							{$localeName}
						</a>
					</li>
				{/foreach}
			</ul>
		</li>
	</ul>
{/if}