@extends('layouts.master')

@section('title', $conv->title)

@section('content')
	<h1>{{ $conv->title }}</h1>
	@foreach ($conv->messages as $msg)
					<div>
									<p>Enviada por: 
									<a href="{{ route('users.show', $msg->from_id) }}">
													{{ $msg->author->name }}
									</a>
									<p> {{ $msg->body }} </p>
					</div>
	@endforeach

	<form method="POST" action="{{ route('messages.store') }}">
					<input type="text" name="body" placeholder="Mensagem...">
					<input type="hidden" name="conversation_id" value="{{ $conv->id }}">
					{{ csrf_field() }}
					<input type="submit">
	</form>

	<form id="form" action="{{ route('conversations.destroy', $conv->id) }}" method="POST">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<a onclick="document.getElementById('form').submit();" href="#">Deletar</a>
	</form>

@endsection
