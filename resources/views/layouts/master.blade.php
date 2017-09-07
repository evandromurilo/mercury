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
		<link href="{{ asset('css/style_page_advertisement.css') }}" rel="stylesheet">

		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js" type="text/javascript"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		 integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"  crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
		 integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

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
