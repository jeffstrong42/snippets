<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

		@yield('stylesheets')
		{{ HTML::style('css/vendors/bootstrap.css') }}
		{{ HTML::style('css/main.css') }}

</head>
<body>
	
	<div class="container">

		@yield('main')

	</div>
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/vendors/tabby.js') }}

	
	<script>
		$('textarea').tabby();
	</script>

	@yield('scripts')
</body>
</html>