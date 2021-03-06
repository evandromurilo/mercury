@extends('layouts.master')

@section('title', 'Mensagens')

@section('content')
	<h1>Mensagens</h1>

	<a href="{{ route('messages.create') }}">Nova mensagem</a><br>

	@foreach ($msgs as $msg)
		@if (!$msg->seen)
			<a style="color:red;" href="{{ route('messages.show', $msg->id) }}">{{ $msg->title }}</a><br>
		@else
			<a href="{{ route('messages.show', $msg->id) }}">{{ $msg->title }}</a><br>
		@endif
	@endforeach
@endsection
