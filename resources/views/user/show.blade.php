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
	<div class="well">
		<div class="row">
			<h2>Anúncios</h2>
			<ul id="rows-ul">
					@foreach ($user->ads as $ad)
						@if ($ad->price == 0)
							<li id="rows-li"><i class="fa fa-gift" aria-hidden="true" style="color:green;"></i><a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a></li>
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
</article>


@endsection
