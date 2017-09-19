@extends('layouts.master')

@section('title', 'Perfil')

@section('content')
	<h1> {{ $user->name }} </h1>
	@if (Storage::exists('public/users/' . $user->id))
		<img id="avatar" src="{{ asset(Storage::url('public/users/' . $user->id)) }}">
	@else
		<img id="avatar" src="{{ $user->gravatar }}?s=120">
	@endif

	@if (Auth::check() && Auth::id() == $user->id)
		<a href={{ route('users.edit', Auth::id()) }}>Editar</a>
	@endif

<div class="well">
	<div class="row">
	<h2>Anúncios</h2>
	<ul id="rows-ul">
	@foreach ($user->ads as $ad)
		@if ($ad->price == 0) 
			Free! <li id="rows-li"><a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a></li>
		@else
			<li id="rows-li"><a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a></li>
		@endif
	@endforeach
	</ul>

</div>
</div>
@endsection
