<nav class="wy-nav-top" aria-label="top navigation">
	<i data-toggle="wy-nav-top" class="fa fa-bars"></i>
	<a href="/">
		<@ if @{ imageLogoMobile | def (@{ imageLogo }) } @>
			<img src="@{ imageLogoMobile | def (@{ imageLogo }) }" class="logo" alt="Logo"/>
		<@ else @>
			@{ brand | def (@{ sitename }) }
		<@ end @>	
	</a>
</nav>