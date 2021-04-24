<@ if @{ ?list } @>
	<@ default.php @>
<@ else @>
	<@ elements/header.php @>
		<nav class="navbar">
			<ul>
				<@ newPagelist { type: 'children', context: '/' } @>
				<@ foreach in pagelist @>
					<li><a href="@{ url }">@{ title }</a></li>
				<@ end @>
				<@ if @{ urlGithub } @>
					<li class="github"><a href="@{ urlGithub }" class="fa fa-github-alt"></a></li>
				<@ end @>
			</ul>
		</nav>
		<div class="container">
			<div class="rst-content blocks">
				@{ +main }
			</div>
			<footer>
				<@ elements/footernav.php @> 
			</footer>
		</div>
	<@ elements/footer.php @>
<@ end @>

