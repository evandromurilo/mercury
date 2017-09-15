@extends('layouts.master')

@section('title', 'Criar anúncio')

@section('content')

		<div class="container">
				<div class="row">
						<div class="col-md-8 col-md-offset-2">
								<div class="panel panel-default">
										<div class="panel-heading">Criar Anúncio</div>
										<div class="panel-body">

												<form method="post" action="{{ route('messages.store') }}">


														<input type="hidden" name="_token" value="{{ csrf_token() }}">

														<div class="form-group">
																<label class="exemploInputTitulo">TíTulo da Mensagem</label>
																<input type="text" name="title" class="form-control" value="{{ old('title') }}" autocomplete="off" placeholder="Ex: MJ Montador..."/>
														</div>
														@if ($errors->has('title'))
																<div class="alert alert-danger size_alert">{{ $errors->first('title') }}</div>
														@endif

														<div class="form-group">
																<label class="exemploInputDescription">Corpo da Mensagem</label>
																<input type="text" name="body" class="form-control" value="{{ old('body') }}" autocomplete="off" placeholder="Ex: Tenho Certificação em Algumas áreas... "/>
														</div>
														@if ($errors->has('body'))
																<div class="alert alert-danger size_alert">{{ $errors->first('body') }}</div>
														@endif

														<div class="form-group">
																<label class="exemploInputContact">Email do remetente:</label>
																<input type="text" name="to_email" class="form-control" value="{{ old('to_email') }}" id="field" autocomplete="off"/>
														</div>
														@if ($errors->has('to_email'))
																<div class="alert alert-danger size_alert">{{ $errors->first('to_email') }}</div>
														@endif

														<input type="submit" name="submit" value="Enviar Dados" class="btn btn-primary">

												</form>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection