@extends('layouts.master')

@section('title', 'Index')

@section('content')
	<h1>Lista de Anúncios</h1>
	@foreach($ads as $ad)
		<h2>{{ $ad->name }}</h2>
		<p>{{ $ad->description }}</p>
		<br>
	@endforeach
@endsection
