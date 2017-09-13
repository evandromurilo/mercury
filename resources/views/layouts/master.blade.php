<!doctype html>
<html>
	<head>
		<title>Mercury | @yield('title', 'Home')</title>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="https://use.fontawesome.com/2487cfdf7c.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<link href="{{ asset('css/style_form.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style_navbar.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style_ad_index.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style_ad_create.css') }}" rel="stylesheet">


		<script src="https://use.fontawesome.com/2487cfdf7c.js"></script>

	</head>
	<body>
		<div id="app">
				<nav class="navbar navbar-default navbar-static-top">
						<div class="container">
								<div class="navbar-header">

										<!-- Collapsed Hamburger -->
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
												<span class="sr-only">Toggle Navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button>

										<!-- Branding Image -->
										<a class="navbar-brand" href="{{ url('/') }}"><!--<i class="fa fa-handshake-o" aria-hidden="true"
											style="font-size:30px;"
										></i>-->
												{{ config('app.name', 'Laravel') }}
										</a>
								</div>

								<div class="collapse navbar-collapse" id="app-navbar-collapse">
										<!-- Left Side Of Navbar -->
										<ul class="nav navbar-nav">
												&nbsp;
												<li class="nav-item">
													<a class="nav-link" href="{{ route('home') }}">Home </a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ route('ads.index') }}">Anúncios</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ route('about') }}">Sobre</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ route('contact') }}">Contato</a>
												</li>
										</ul>

										<!-- Right Side Of Navbar -->
										<ul class="nav navbar-nav navbar-right">
												<!-- Authentication Links -->
												@if (Auth::guest())
														<li><a href="{{ route('login') }}">Login</a></li>
														<li><a href="{{ route('register') }}">Criar Conta</a></li>
												@else
														<li class="dropdown">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
																		{{ Auth::user()->name }} <span class="caret"></span>
																</a>

																<ul class="dropdown-menu" role="menu">
																		<li><a href="{{ route('ads.create') }}">Novo Anúncio</a></li>
																		<li><a href="{{ route('users.show', Auth::user()->id) }}">Perfil</a></li>
																		<li>
																				<a href="{{ route('logout') }}"
																						onclick="event.preventDefault();
																										 document.getElementById('logout-form').submit();">
																						Logout
																				</a>

																				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																						{{ csrf_field() }}
																				</form>
																		</li>
																</ul>
														</li>
												@endif
										</ul>
								</div>
						</div>
				</nav>

				@yield('content')
		</div>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>

		<footer class="navbar  navbar-default fixarRodape">
			@include('partials/links')

			<div class="card text-center container-fluid">

				<div class="card-body">
					<h4 class="card-title">Special title treatment</h4>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size:30px; color:black;"></i></a>
					<a href="#"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size:30px; color:black;" ></i></i></a>
					<a href="#"><i class="fa fa-google-plus-official" aria-hidden="true" style="font-size:30px; color:black;"></i></a>
					<a href="#"><i class="fa fa-github-alt" aria-hidden="true" style="font-size:30px; color:black;"></i></a>
					<a href="#"><i class="fa fa-skype" aria-hidden="true" style="font-size:30px; color:black;"></i></a>

				</div>
			<div class="card-footer text-muted">
				© COPYRIGHT 2017 MERCURY LTDA, TODOS OS DIREITOS RESERVADOS
			</div>
</div>

		</footer>
	</body>
</html>
