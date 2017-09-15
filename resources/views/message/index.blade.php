@extends('layouts.master')

@section('title', 'Mensagens')

@section('content')
	<h1>Mensagens</h1>

	@foreach ($msgs as $msg)
		<a href="{{ route('messages.show', $msg->id) }}">{{ $msg->title }}</a>
	@endforeach
@endsection
