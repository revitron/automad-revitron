<h1>@{ searchResultsTitle | def ('Search Results') }</h1>
<@ newPagelist { type: false, search: @{ ?query } } @>
<strong>"@{ ?query }" &mdash; @{ :pagelistCount }</strong>
<@ foreach in pagelist @>
	<h3><a href="@{ url }">@{ title }</a></h3>	
	<p>@{ +main | findFirstParagraph }</p>
<@ else @>
	<div class="admonition">
		<p>@{ notificationNoSearchResults | def ('No matching pages found.') }</p>
	</div>
<@ end @>