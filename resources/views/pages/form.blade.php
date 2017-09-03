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
  @if(count($errors) > 0)
    <div class="alert alert-danger size_alert">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
    <div class="form-group">
      <label for="exampleInputNome">Nome Completo</label>
      <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" id="exampleInputNome" aria-describedby="nomelHelp" placeholder="Ex. José ...">
    </div>

    <div class="form-group">
      <label for="exampleInputProfissao">Profissão</label>
      <input type="text" name="profissao" class="form-control" id="exampleInputProfissao" placeholder="Ex. Montador de ar ...">
    </div>
    @if ($errors->any())
              <p class="alert alert-danger size_alert">Você precisa informar um Profissão Valida!</p>
    @endif
    <div class="form-group">
      <label for="exampleInputIdade">Idade</label>
      <input type="text" name="idade" class="form-control" id="exampleInputIdade" placeholder="Ex. 23">
    </div>
    @if ($errors->any())
              <p class="alert alert-danger size_alert">O Campo Idade Não e Valido!</p>
    @endif

              <div class="form-group">
                <label for="exampleInputNascimento">Data de Nascimento</label>
                  <div class='input-group date' id='datetimepicker1'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                          <span class="fa fa-calendar"></span>
                      </span>
                  </div>
              </div>

          <script type="text/javascript">
              $(function () {
                  $('#datetimepicker1').datetimepicker();
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
          <input type="text" name="endereco" class="form-control" id="exampleInputEndereco" placeholder="Ex. Rua Branderante, Bairro São Miguel, N°0000">
        </div>
        @if ($errors->any())
                  <p class="alert alert-danger size_alert">O Campo Endereço deve ser fornecido corretamente!</p>
        @endif
        <div class="form-group">
          <label for="exampleInputEmail">E-mail</label>
          <input type="email" class="form-control" id="exampleInputEmail" placeholder="Ex. jose_jipa@gmail.bom">
        </div>

        <div class="form-group">
          <label for="exampleInputFone">Telefone</label>
          <input type="text" name="fone" class="form-control" id="exampleInputfone" placeholder="Ex. (xx) 0000-0000">
        </div>
        @if ($errors->any())
                  <p class="alert alert-danger size_alert">O Campo Telefone não e Valido!</p>
        @endif
        <div class="form-group">
          <label for="exampleInputCelular">Celular</label>
          <input type="text" name="celular" class="form-control" id="exampleInputCelular" placeholder="Ex. (xx) 0000-0000">
        </div>
        @if ($errors->any())
                  <p class="alert alert-danger size_alert">O Campo Celular não e Valido!</p>
        @endif
    <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </fieldset>
</form>

@endsection
