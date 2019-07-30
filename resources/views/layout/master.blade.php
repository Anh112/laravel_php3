<style>	
div{
	border: 1px solid;
}
</style>
<head>
	<title>@yield('title')</title>
</head>
<div>
	<div class="header">Header</div>
	<div class="navbar">
		<ul>
			<li>1</li>
			<li>1</li>
			<li>1</li>
			<li>1</li>
		</ul>
	</div>
	<div class="container">
		<div class="content">
			<div>@yield('table_name')table</div>
			<div>@yield('table')</div>
		</div>
	</div>
	<div>Footer</div>
	@yield('custom')
</div>