@extends('layouts.master')

@section('title','Formulário')

@section('menu')

@endsection
@section('content')


<form method="post" action="/post_validate" >
<fieldset class="col-md-6 form">
  <legend id="legenda-form">Detalhe da Propaganda</legend><br>
  <div class="form-group align-items-center">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>

    <div class="form-group">
      <label for="exampleInputNome">Nome Completo</label>
      <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" id="exampleInputNome" aria-describedby="nomelHelp" placeholder="Ex. José ...">
    </div>
    @if ($errors->has('nome'))
      <div class="alert alert-danger size_alert">{{ $errors->first('nome') }}</div>
    @endif

    <div class="form-group">
      <label for="exampleInputProfissao">Profissão</label>
      <input type="text" name="profissao" class="form-control" value="{{ old('profissao') }}" id="exampleInputProfissao" placeholder="Ex. Montador de ar ...">
    </div>
    @if ($errors->has('profissao'))
      <div class="alert alert-danger size_alert">{{ $errors->first('profissao') }}</div>
    @endif

    <div class="form-group">
      <label for="exampleInputIdade">Idade</label>
      <input type="text" name="idade" class="form-control" value="{{ old('idade') }}" id="exampleInputIdade" placeholder="Ex. 23">
    </div>
    @if ($errors->has('idade'))
      <div class="alert alert-danger size_alert">{{ $errors->first('idade') }}</div>
    @endif



        <div class="row">
            <div class='col-sm-offset-4 col-sm-4'>
              <div class="form-group">
                <label for="exampleInputNascimento">Data de Nascimento</label>
                  <div class='input-group date'>
                      <input type='text' class="form-control datepicker"  id='calendario' name="date" value="{{ old('date') }}"  />
                      <span class="input-group-addon">
                          <span class="fa fa-calendar"></span>
                      </span>
                  </div>
              </div>
            </div>
        </div>
      <script>
            $(function() {
                $("#calendario").datepicker({
                  dateFormat: 'dd-mm-yy',
                  locale: 'pt-br'
              });
            });
      </script>
      <script>
                $(function() {
                    $( "#calendario" ).datepicker();
                });
      </script>

        <div class="form-group">
          <label for="exampleInputSexo">Sexo</label><br>
            <label class="custom-control custom-radio">
              <input id="radio1" name="sexo" type="radio" value="homem" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Homem</span>
            </label>
            <label class="custom-control custom-radio">
              <input id="radio2" name="sexo" type="radio" value="mulher" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Mulher</span>
            </label>
        </div>

        <div class="form-group">
          <label for="exampleInputEndereco">Endereço</label>
          <input type="text" name="endereco" class="form-control" value="{{ old('endereco') }}" id="exampleInputEndereco" placeholder="Ex. Rua Branderante, Bairro São Miguel, N°0000">
        </div>
        @if ($errors->has('endereco'))
          <div class="alert alert-danger size_alert">{{ $errors->first('endereco') }}</div>
        @endif

        <div class="form-group">
          <label for="exampleInputEmail">E-mail</label>
          <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="exampleInputEmail" placeholder="Ex. jose_jipa@gmail.bom">
        </div>
        @if ($errors->has('email'))
          <div class="alert alert-danger size_alert">{{ $errors->first('email') }}</div>
        @endif

        <div class="form-group">
          <label for="exampleInputFone">Telefone</label>
          <input type="text" name="fone" class="form-control" value="{{ old('fone') }}" id="exampleInputfone" placeholder="Ex. (xx) 0000-0000">
        </div>
        @if ($errors->has('fone'))
          <div class="alert alert-danger size_alert">{{ $errors->first('fone') }}</div>
        @endif

        <div class="form-group">
          <label for="exampleInputCelular">Celular</label>
          <input type="text" name="celular" class="form-control" id="exampleInputCelular" placeholder="Ex. (xx) 0000-0000">
        </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </fieldset>
</form>


@endsection
