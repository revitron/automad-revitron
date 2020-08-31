<@ if @{ ?query } @>
	<@ default.php @>
<@ else @>
	<@ snippets/header.php @>
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
			<div class="rst-content">
				@{ +main }
			</div>
			<footer>
				<div role="contentinfo">
					<p>
						&copy; Copyright @{ author | def (@{ sitename })}
					</p>
				</div> 
			</footer>
		</div>
	<@ snippets/footer.php @>
<@ end @>

