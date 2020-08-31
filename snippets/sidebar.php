<nav data-toggle="wy-nav-shift" class="wy-nav-side">
	<div class="wy-side-scroll">
		<div class="wy-side-nav-search">
			<div class="brand">
				<a href="/">
					<@ with @{ imageLogo } @>
						<img src="@{ imageLogo }" class="logo" alt="Logo"/>
					<@ else @>
						@{ brand | def (@{ sitename }) }
					<@ end @>			
				</a>	
			</div>
			<div role="search">
				<form id="rtd-search-form" class="wy-form" action="/" method="get">
					<input type="text" name="query" placeholder="@{ placeholderSearch | def ('Search') }" />
				</form>
			</div>
		</div>
		<@ nav.php @>
	</div>
</nav>