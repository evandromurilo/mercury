@extends('layouts.master')

@section('title','Formulário')

@section('menu')

@endsection
@section('content')


<form method="post" action="/form2_validate" >
<fieldset class="col-md-6 form">
  <legend id="legenda-form">Detalhe da Propaganda</legend><br>
  <div class="form-group align-items-center">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>

    <div class="form-group">
      <label for="exampleInputNome">Nome</label>
      <input type="text" name="name" class="form-control" value="{{ old('name') }}" autocomplete="off" id="exampleInputNome" aria-describedby="nomelHelp" placeholder="Ex. José ...">
    </div>
    @if ($errors->has('name'))
      <div class="alert alert-danger size_alert">{{ $errors->first('name') }}</div>
    @endif

    <div class="form-group">
      <label for="exampleInputProfissao">Descrição</label>
      <input type="text" name="description" class="form-control" value="{{ old('description') }}" autocomplete="off" id="exampleInputProfissao" placeholder="Ex. Montador de ar ...">
    </div>
    @if ($errors->has('description'))
      <div class="alert alert-danger size_alert">{{ $errors->first('description') }}</div>
    @endif

    <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </fieldset>
</form>

@endsection
