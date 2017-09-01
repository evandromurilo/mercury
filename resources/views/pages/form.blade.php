@extends('layouts.master')

@section('title','Formulário')

@section('menu')

@endsection
@section('content')
<form method="post" >
<fieldset class="col-md-6 form">
  <legend>Detalhe da Propaganda</legend><br>
  <div class="form-group align-items-center">
    <div class="form-group">
      <label for="exampleInputNome">Nome Completo</label>
      <input type="text" class="form-control" id="exampleInputNome" aria-describedby="nomelHelp" placeholder="Ex. José ...">
    </div>

    <div class="form-group">
      <label for="exampleInputProfissao">Profissão</label>
      <input type="text" class="form-control" id="exampleInputProfissao" placeholder="Ex. Montador de ar ...">
    </div>

    <div class="form-group">
      <label for="exampleInputIdade">Idade</label>
      <input type="text" class="form-control" id="exampleInputIdade" placeholder="Ex. 23">
    </div>

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
          <input type="text" class="form-control" id="exampleInputEndereco" placeholder="Ex. Rua Branderante, Bairro São Miguel, N°0000">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail">E-mail</label>
          <input type="text" class="form-control" id="exampleInputEmail" placeholder="Ex. jose_jipa@gmail.bom">
        </div>

        <div class="form-group">
          <label for="exampleInputFone">Telefone</label>
          <input type="text" class="form-control" id="exampleInputfone" placeholder="Ex. (xx) 0000-0000">
        </div>

        <div class="form-group">
          <label for="exampleInputCelular">Celular</label>
          <input type="text" class="form-control" id="exampleInputCelular" placeholder="Ex. (xx) 0000-0000">
        </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </fieldset>
</form>

@endsection
