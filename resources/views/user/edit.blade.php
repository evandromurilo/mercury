@extends('layouts.master')

@section('title','Formulário')


@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Detalhes da Propaganda</div>
                    <div class="panel-body">
                      <form method="post" action="{{ route('users.update', Auth::id()) }}" >
			 {{ method_field('PATCH') }}
  <div class="form-group align-items-center">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>

    <div class="form-group">
      <label for="exampleInputNome">Nome Completo</label>
      <input type="text" name="full_name" class="form-control" value="{{ Auth::user()->full_name }}" id="exampleInputNome" aria-describedby="nomelHelp" placeholder="Ex. José ...">
    </div>
    @if ($errors->has('full_name'))
      <div class="alert alert-danger size_alert">{{ $errors->first('full_name') }}</div>
    @endif

    <div class="form-group">
      <label for="exampleInputProfissao">Profissão</label>
      <input type="text" name="description" class="form-control" value="{{ Auth::user()->description }}" id="exampleInputProfissao" placeholder="Ex. Montador de ar ...">
    </div>
    @if ($errors->has('description'))
      <div class="alert alert-danger size_alert">{{ $errors->first('description') }}</div>
    @endif

    <div class="form-group">
      <label for="exampleInputIdade">Idade</label>
      <input type="text" name="age" class="form-control" value="{{ Auth::user()->age }}" id="exampleInputIdade" placeholder="Ex. 23">
    </div>
    @if ($errors->has('age'))
      <div class="alert alert-danger size_alert">{{ $errors->first('age') }}</div>
    @endif

        <div class="form-group">
          <label for="exampleInputSexo">Sexo</label><br>
            <label class="custom-control custom-radio">
							@if (Auth::user()->gender == 1)
								<input id="radio1" name="gender" type="radio" value="homem" checked="checked" class="custom-control-input">
							@else
								<input id="radio1" name="gender" type="radio" value="homem" class="custom-control-input">
							@endif
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Homem</span>
            </label>
            <label class="custom-control custom-radio">
							@if (Auth::user()->gender == 0)
								<input id="radio2" name="gender" type="radio" value="mulher" checked="checked" class="custom-control-input">
							@else
								<input id="radio2" name="gender" type="radio" value="mulher" class="custom-control-input">
							@endif
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Mulher</span>
            </label>
        </div>

        <div class="form-group">
          <label for="exampleInputEndereco">Endereço</label>
	  <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}" id="exampleInputEndereco" placeholder="Ex. Rua Branderante, Bairro São Miguel, N°0000">
        </div>
        @if ($errors->has('address'))
          <div class="alert alert-danger size_alert">{{ $errors->first('address') }}</div>
        @endif

        <div class="form-group">
          <label for="exampleInputEmail">E-mail</label>
	  <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" id="exampleInputEmail" placeholder="Ex. jose_jipa@gmail.bom">
        </div>
        @if ($errors->has('email'))
          <div class="alert alert-danger size_alert">{{ $errors->first('email') }}</div>
        @endif

        <div class="form-group">
          <label for="exampleInputFone">Telefone</label>
	  <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}" id="exampleInputfone" placeholder="Ex. (xx) 0000-0000">
        </div>
        @if ($errors->has('phone'))
          <div class="alert alert-danger size_alert">{{ $errors->first('phone') }}</div>
        @endif

        <div class="form-group">
          <label for="exampleInputCelular">Celular</label>
	  <input type="text" name="cell_phone" class="form-control" value="{{ Auth::user()->cell_phone }}" id="exampleInputCelular" placeholder="Ex. (xx) 0000-0000">
        </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
      </div>

        </form>
        <div>
      <div>
    <div>
  <div>
<div>
<div>


@endsection
