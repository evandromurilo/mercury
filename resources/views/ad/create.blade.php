@extends('layouts.master')

@section('title', 'Criar anúncio')

@section('content')

	<link href="{{ asset('css/style_ad_create.css') }}" rel="stylesheet">

		<div class="container">
				<div class="row">
						<div class="col-md-8 col-md-offset-2">
								<div class="panel panel-default">
										<div class="panel-heading">Criar Anúncio</div>
										<div class="panel-body">

												<form method="post" action="{{ route('ads.store') }}" enctype="multipart/form-data">


														<input type="hidden" name="_token" value="{{ csrf_token() }}">

														<div class="form-group">
																<label class="exemploInputTitulo">TíTulo do Anúcio</label>
																<input type="text" name="title" class="form-control" size=30 maxlength=30 value="{{ old('title') }}" autocomplete="off" placeholder="Ex: MJ Montador..."/>
														</div>
														@if ($errors->has('title'))
																<div class="alert alert-danger size_alert">{{ $errors->first('title') }}</div>
														@endif

														<div class="form-group">
																<label class="exemploInputDescription">Descrição sobre Anúncio</label>
																<input type="text" name="description" class="form-control"  value="{{ old('description') }}" autocomplete="off" placeholder="Ex: Tenho Certificação em Algumas áreas... "/>
														</div>
														@if ($errors->has('description'))
																<div class="alert alert-danger size_alert">{{ $errors->first('description') }}</div>
														@endif

														<div class="form-group">
																<label class="exemploInputContact">Preço</label>
																<input type="text" name="price" class="form-control" value="{{ old('price') }}" id="field" placeholder="Ex: 12.05" autocomplete="off"/>
														</div>
														@if ($errors->has('price'))
																<div class="alert alert-danger size_alert">{{ $errors->first('price') }}</div>
														@endif

														<div class="form-group">
																<label class="exemploInputContact">Contato</label>
																<input type="text" name="contact" class="form-control" value="{{ old('contact') }}" id="field"  autocomplete="off"/>
														</div>
														@if ($errors->has('contact'))
																<div class="alert alert-danger size_alert">{{ $errors->first('contact') }}</div>
														@endif

														<div class="form-group">
																<label class="btn btn-primary btn-file">
																		Selecione uma Imagem <input type="file" name="image" style="display: none;">
																</label>
														</div>

														<input type="submit" name="submit" value="Enviar Dados" class="btn btn-primary">

												</form>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
