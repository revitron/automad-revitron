<@ if @{ tags } or @{ date } @>
	<p>
		@{ date | dateFormat (@{ formatDate | def ('M jS Y') }, @{ locale }) }
		<@ if @{ tags } and @{ date } @>&mdash;<@ end @>
		<@ foreach in tags ~@>
			<@ if @{ :i } > 1 @>, <@ end ~@>
			<a href="@{ urlPagelist | def ('/') }?list=1&filter=@{ :tag }">@{ :tag }</a>
		<@~ end @>
	</p>
<@ end @>