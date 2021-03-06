<h1>@{ searchResultsTitle | def ('Search Results') }</h1>
<@ newPagelist { 
	type: false, 
	search: @{ ?search },
	filter: @{ ?filter },
	sort: 'date desc'
} @>
<div class="pagelist-forms">
	<form action="">
		<select name="filter" onchange="this.form.submit()">
			<option value=""<@ if not @{ :filter } @> selected<@ end @>>@{ labelShowAll | def ('Show All') }</option>
			<@ foreach in filters @>
				<option value="@{ :filter }"<@ if @{ :filter } = @{ ?filter } @> selected<@ end @>>@{ :filter }</option>
			<@ end @>
		</select>
		<input type="hidden" name="search" value="@{ ?search }">
		<input type="hidden" name="list" value="1">
	</form>
	<@ if @{ ?search } @>
		<form action="">
			<input type="hidden" name="search" value="">
			<input type="hidden" name="filter" value="@{ ?filter }">
			<input type="hidden" name="list" value="1">
			<button type="submit">✗ @{ ?search }</button>
		</form>
	<@ end @>
</div>
<@ ../blocks/pagelist/simple.php @>