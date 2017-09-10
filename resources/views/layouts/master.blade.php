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
		<link href="{{ asset('css/style_ad_create.css') }}" rel="stylesheet">




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
			<div class="card">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
					  <div class="collapse navbar-collapse" id="navbarText">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item">
					        <a class="nav-link" href="{{ route('home') }}">Home </a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="{{ route('contact') }}">Contato</a>
					      </li>
						  <li class="nav-item">
					        <a class="nav-link" href="{{ route('about') }}">Sobre</a>
					      </li>
					    </ul>
					    <span class="navbar-text">
							@if (Auth::guest())
								<a href="{{ route('login') }}"> Login<i class="fa fa-user-o" aria-hidden="true"></i> </a>
								<a href="{{ route('register') }}"> Criar Conta<i class="fa fa-sign-in" aria-hidden="true"></i> </a>
							@else
								<a href="#">Perfil<i class="fa fa-user-o" aria-hidden="true"></i> </a>
								<a href="#">Logout<i aria-hidden="true"></i> </a>
							@endif
					    </span>
					  </div>
</nav>
</div>
		<div class="content">
			@yield('content')
		</div>
		<footer class="navbar-default navbar-fixed-bottom fixarRodape">
			@include('partials/links')

			<div class="card text-center container-fluid">
			  <div class="card-header">
			    Featured
			  </div>
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
