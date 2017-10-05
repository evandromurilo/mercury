@extends('layouts.master')

@section('title', 'Mensagens')

@section('content')
	<h1>Conversas</h1>

	<a href="{{ route('conversations.create') }}">Nova conversa</a><br>

	@foreach ($convs as $conv)
		<a href="{{ route('conversations.show', $conv->id) }}">{{ $conv->title }}</a><br>
	@endforeach
@endsection
