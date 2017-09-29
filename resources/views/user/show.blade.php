@extends('layouts.master')

@section('title', 'Perfil')

@section('content')


<link href="{{ asset('css/style_user_show.css') }}" rel="stylesheet">

<header>
	<h1> {{ $user->name }} </h1>
		<div class="gravata-avatar">
				@if (Storage::exists('public/users/' . $user->id))
					<img id="avatar" src="{{ asset(Storage::url('public/users/' . $user->id)) }}">
				@else
					<img id="avatar" src="{{ $user->gravatar }}?s=120">
				@endif
		</div>
	@if (Auth::check() && Auth::id() == $user->id)
		<a class="alterar-a" href="{{ route('users.edit', Auth::id()) }}">Editar Perfil</a>
	@endif
</header>

<article>
	<div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="well">

					<h2>Anúncios</h2>
					<ul id="rows-ul">
							@foreach ($user->ads as $ad)
								@if ($ad->price == 0)
									<li onmouseover="Mover();" onmouseout="Tirar();" id="rows-li"><i class="fa fa-gift" aria-hidden="true" style="color:green;"></i><a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a></li>
								@else
									<li id="rows-li"><i class="fa fa-usd" aria-hidden="true" style="color:#FFD700"></i><a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a></li>
								@endif
							@endforeach
					</ul>
					@if (Auth::check())
						<a class="btn_messages" href="{{ route('messages.create', ['user' => $user->id]) }}">Enviar Mensagem<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					@endif
				</div>
				</div>
				<!-- coluna onde as informações tem que aparecer-->
				<div class="col-md-8">
					<span id="titulo"></span>
					<spa
					<!-- Aqui as informações deve aparecer com titulo conteudo-->
			</div>
		</div>
	</div>
</article>
<!-- mano fiz aqui mais vai precisar de um lop mais acho que a ideia e essa-->
<script type="text/javascript">
	function Mover() {
		document.getElementById('titulo').innerHTML = "{{ $ad->title }}" ;
	}
	function Tirar(){
		document.getElementById('titulo').innerHTML = null;
	}
</script>
@endsection
