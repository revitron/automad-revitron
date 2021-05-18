<div role="contentinfo">
	<p>
		&copy; Copyright @{ :now | dateFormat ('Y') }, @{ author | def (@{ sitename })}
	</p>
</div> 
<nav class="nav-footer">
	<# @{ checkboxShowInFooter } #>
	<@ newPagelist { excludeHidden: false, match: '{"checkboxShowInFooter": "/[^0]+/"}' } @>
	<ul>
		<@ foreach in pagelist @>
			<li><a href="@{ url }">@{ title }</a></li>
		<@ end @>
	</ul>
</nav>