<@ snippet current ~@>
	<@ if @{ :current } ~@>
		current
	<@~ end @>
<@~ end @>

<@ snippet currentPath ~@>
	<@ if @{ :currentPath } ~@>
		current
	<@~ end @>
<@~ end @>

<@~ snippet tree @>
	<@ if @{ :pagelistCount } @>
		<ul class="<@ currentPath @>">
			<@ foreach in pagelist @>
				<li class="toctree-l@{ :level } <@ currentPath @>">
					<a class="reference internal <@ current @>" href="@{ url }">@{ title }</a>
					<@ if @{ :current } @>
						<@ subnav.php @>
					<@ end @>
					<@ tree @>
				</li>
			<@ end @>
		</ul>
	<@ end @>
<@ end ~@>

<div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
	<@ newPagelist { type: children } @>
	<@~ with '/' @>
		<@ tree @>
	<@~ end @>		
</div>