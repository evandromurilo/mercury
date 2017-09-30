@extends('layouts.master')

@section('title', 'Perfil')

@section('content')

<link href="{{ asset('css/style_user_show.css') }}" rel="stylesheet">

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
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
</div>
</div>
</div>
</header>

<article>
	<div class="container">
			<div class="row">
				<div class="col-md-3 .col-xs-12">
					<div class="well">

					<h2>Anúncios</h2>
					<ul id="rows-ul" >
							@foreach ($user->ads as $ad)
								@if ($ad->price == 0)
									<adview title="{{ $ad->title }}"  id="{{ $ad->id }}" description="{{ $ad->description }}" price="{{ $ad->priceF }}" free="true" url="{{ route('ads.show', $ad->id) }}"></adview>
								@else
									<adview title="{{ $ad->title }}"   id="{{ $ad->id }}" description="{{ $ad->description }}" price="{{ $ad->priceF }}" url="{{ route('ads.show', $ad->id) }}"></adview>
								@endif
							@endforeach
					</ul>
					@if (Auth::check())
						<a class="btn_messages" href="{{ route('messages.create', ['user' => $user->id]) }}">Enviar Mensagem<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					@endif
				</div>
				</div>



				<div class="col-md-8" style="background-color:red;">

				</div>

			</div>
		</div>


</article>

@endsection
