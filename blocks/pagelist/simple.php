<@ foreach in pagelist @>
	<h3><a href="@{ url }">@{ title }</a></h3>	
	<p>
		@{ +main | findFirstParagraph } 
		<a href="@{ url }" class="more">@{ labelMore | def ('More') }&nbsp;<b>⟶</b></a>
	</p>
<@ else @>
	<div class="admonition">
		<p>@{ notificationNoSearchResults | def ('No matching pages found.') }</p>
	</div>
<@ end @>