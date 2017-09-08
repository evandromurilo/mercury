@extends('layouts.master')

@section('title', 'Criar anúncio')

@section('content')
	<h1>Criar anúncio</h1>
	<form method="post" action="{{ route('ads.store') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		Título:
		@if ($errors->has('title'))
		  <div class="alert alert-danger size_alert">{{ $errors->first('title') }}</div>
		@endif
		<input type="text" name="title"/><br>
		Descrição:
		@if ($errors->has('description'))
		  <div class="alert alert-danger size_alert">{{ $errors->first('description') }}</div>
		@endif
		<input type="text" name="description" /><br>
		Contato:
		@if ($errors->has('contact'))
		  <div class="alert alert-danger size_alert">{{ $errors->first('contact') }}</div>
		@endif
		<input type="text" name="contact" /><br>
		<input type="submit" name="submit">
	</form>
@endsection
