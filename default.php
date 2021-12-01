<@ elements/header.php @>
	<div class="wy-grid-for-nav">	
		<@ elements/sidebar.php @>
		<section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">
			<@ elements/navbar.php @>
			<div class="wy-nav-content">
				<div class="rst-content">
					<@ elements/breadcrumbs.php @>
					<div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
						<div class="blocks" itemprop="articleBody">
							<@ if @{ ?list } @>
								<@ elements/pagelist.php @>
							<@ else @>
								<h1>@{ title }</h1>
								<@ elements/date_tags.php @>
								@{ +main }
							<@ end @>
						</div> 
					</div>
				</div>
				<footer>
					<@ elements/prevnext.php @>
					<@ elements/footernav.php @>
				</footer>
			</div>
		</section>
	</div>
	<script type="text/javascript" src="/packages/revitron/automad-revitron/dist/script.min.js"></script>
	<script type="text/javascript">
		jQuery(function () {
			SphinxRtdTheme.Navigation.enable(true);
		});
	</script>							
<@ elements/footer.php @>