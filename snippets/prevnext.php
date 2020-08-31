<@ if @{ url } @>
	<@ newPagelist { type: 'siblings' } @>
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<@ with next @>
			<a href="@{ url }" class="btn btn-neutral float-right" title="Changelog" accesskey="n" rel="next">
				@{ title } &nbsp;<b>⟶</b>
			</a>
		<@ end @>
		<@ with prev @>
			<a href="@{ url }" class="btn btn-neutral float-left" title="Configuration" accesskey="p" rel="prev">
				<b>⟵</b>&nbsp; @{ title }
			</a>
		<@ end @>
	</div>	
<@ end @>
