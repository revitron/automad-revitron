<@ foreach in pagelist @>
	<article>
		<h3><a href="@{ url }">@{ title }</a></h3>
		<p>
			@{ +main | findFirstParagraph } 
		</p>
		<a href="@{ url }" class="more">@{ labelMore | def ('More') }&nbsp;<b>⟶</b></a>
	</article>
<@ else @>
	<div class="admonition">
		<p>@{ notificationNoSearchResults | def ('No matching pages found.') }</p>
	</div>
<@ end @>