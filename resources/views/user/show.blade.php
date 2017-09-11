@extends('layouts.master')

@section('title', 'Perfil')

@section('content')
	<h1> {{ $user->name }} </h1>
	@if (Storage::exists('public/users/' . $user->id))
		<img id="avatar" src="{{ asset(Storage::url('public/users/' . $user->id)) }}">
	@else
		<img id="avatar" src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg">
	@endif

	@if (Auth::check() && Auth::id() == $user->id)
		<a href={{ route('users.edit', Auth::id()) }}>Editar</a>
	@endif
@endsection
