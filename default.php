<@ snippets/header.php @>
	<div class="wy-grid-for-nav">	
		<@ snippets/sidebar.php @>
		<section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">
			<@ snippets/navbar.php @>
			<div class="wy-nav-content">
				<div class="rst-content">
					<@ snippets/breadcrumbs.php @>
					<div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
						<div class="blocks" itemprop="articleBody">
							<@ if @{ ?list } @>
								<@ snippets/pagelist.php @>
							<@ else @>
								<h1>@{ title }</h1>
								<@ snippets/date_tags.php @>
								@{ +main | def(@{ :text }) }
							<@ end @>
						</div> 
					</div>
					<footer>   
						<@ snippets/prevnext.php @>
						<@ snippets/footernav.php @>
 					</footer>
				</div>
			</div>
		</section>
	</div>
	<script type="text/javascript" src="/packages/@{ theme }/dist/script.min.js"></script>
	<script type="text/javascript">
		jQuery(function () {
			SphinxRtdTheme.Navigation.enable(true);
		});
	</script>							
<@ snippets/footer.php @>