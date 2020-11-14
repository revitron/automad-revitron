<div role="navigation" aria-label="breadcrumbs navigation">
	<ul class="wy-breadcrumbs">
		<@ newPagelist { type: 'breadcrumbs' } @>
		<@ foreach in pagelist @>
			<li><a href="@{ url }">@{ title }</a><@ if not @{ :current } @> ⁄&nbsp;<@ end @></li>
		<@ end @>
		<@ if @{ urlGithub } @>
			<li class="wy-breadcrumbs-aside">	
				<a href="@{ urlGithub }" class="fa fa-github-alt"></a>
			</li>			
		<@ end @>
	</ul>
</div>