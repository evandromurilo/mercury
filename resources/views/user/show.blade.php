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

	<h2>Anúncios</h2>
	<ul>
	@foreach ($user->ads as $ad)
			<li><a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a></li>
	@endforeach
	</ul>
@endsection
