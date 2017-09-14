@extends('layouts.master')

@section('title', $ad->title)

@section('content')
	<h1>{{ $ad->title }}</h1>

	<img src="{{ $ad->imgUrl }}">

	<p>{{ $ad->description }}</p>

	@if ($ad->price == 0)
			<p style="color: green;">Free</p>
	@else
			<p>Preço: {{ $ad->priceF }}</p>
	@endif

	<p>Contato: {{ $ad->contact }}</p>

	<p>Criado por:
		<a href={{ route('users.show', $ad->user_id) }}>
			{{ $ad->creator->name }}
		</a>
	</p>

	@if ($ad->user_id == Auth::id())
			<a href="{{ route('ads.edit', $ad->id) }}">Editar</a>
			<form id="form" action="{{ route('ads.destroy', $ad->id) }}" method="POST">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<a onclick="document.getElementById('form').submit();" href="#">Deletar</a>
			</form>
	@endif
@endsection
