<!doctype html>

<html>
	<head>
		<title>Mercury | @yield('title', 'Home')</title>
	</head>
	<body>
		<div class="content">
			@yield('content')
		</div>
		<footer>
			@include('partials/links')
		</footer>
	</body>
</html>
