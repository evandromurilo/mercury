@extends('layouts.master')

@section('title', $msg->title)

@section('content')
	<h1>{{ $msg->title }}</h1>
	<p>Enviada por: 
	<a href="{{ route('users.show', $msg->from_id) }}">
		{{ $msg->author->name }}
	</a>
	<p> {{ $msg->body }} </p>

	<a href="{{ route('messages.create', ['msg' => $msg->id]) }}">Responder</a>
	<form id="form" action="{{ route('messages.destroy', $msg->id) }}" method="POST">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<a onclick="document.getElementById('form').submit();" href="#">Deletar</a>
	</form>
	
@endsection
