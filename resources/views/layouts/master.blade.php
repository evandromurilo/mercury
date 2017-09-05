<!doctype html>
<html>
	<head>
		<title>Mercury | @yield('title', 'Home')</title>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
		integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<link href="{{ asset('css/style_form.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style_navbar.css') }}" rel="stylesheet">

		<script src="https://use.fontawesome.com/2487cfdf7c.js"></script>

	</head>
	<body>
		<div class="menu" @yield('menu')>
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link active" href="{{ route('home') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('contact') }}">Contato</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('about') }}">Sobre</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Não tem ainda</a>
				</li>
			</ul>

		</div>
		<div class="content">
			@yield('content')
		</div>
		<footer>
			@include('partials/links')
		</footer>
	</body>
</html>
