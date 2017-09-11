@extends('layouts.master')

@section('title', 'Criar anúncio')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Criar Anúncio</div>
	                	<div class="panel-body">

										<form method="post" action="{{ route('ads.store') }}">


		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label class="exemploInputTitulo">TíTulo do Anúcio</label>
			<input type="text" name="title" class="form-control" value="{{ old('title') }}"placeholder="Ex: MJ Montador..."/>
		</div>
					@if ($errors->has('title'))
					  <div class="alert alert-danger size_alert">{{ $errors->first('title') }}</div>
					@endif

		<div class="form-group">
			<label class="exemploInputDescription">Descrição sobre Anúncio</label>
			<input type="text" name="description" class="form-control" value="{{ old('description') }}" placeholder="Ex: Tenho Certificação em Algumas áreas... "/>
		</div>
					@if ($errors->has('title'))
					  <div class="alert alert-danger size_alert">{{ $errors->first('description') }}</div>
					@endif

		<div class="form-group">
			<label class="exemploInputContact">Contato</label>
			<input type="text" name="contact" class="form-control" value="{{ old('contact') }}" id="field"/>
		</div>
					@if ($errors->has('title'))
					  <div class="alert alert-danger size_alert">{{ $errors->first('contact') }}</div>
					@endif

			<input type="submit" name="submit" class="btn btn-primary">

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection
