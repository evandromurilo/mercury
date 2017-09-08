@extends('/layouts.master')

@section('title', 'Informção sobre a propaganda')

@section('content')

  <div id="topo">
      <p> falta implementar</p>
    </div>
@for($i = 0; $i < 3; $i++)
  <div class="cotainer view_ads">
    <div class="row">
      <div class="col-xs-6">
        <img id="size_img" src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg"
        class="rounded float-lenf img-thumbnail" alt="">
      </div>
      <div class="col-xs-6">
        <h3 class="text text-center">Titulo do anuncio</h3>

          <p class="d-incline-block text-trucate" style="max-width: 300px;"> Comentario sobre a profissão o que faz da validation
          no que ele e bom, e qual o tipo de serviço dele icon </p>
          <p>nome</p>
          <p><a href="#">Informação sobre serviço</a></p>
          <p> contanto </p>
          <p><a href="#">visita o perfil</a></p>

      </div>
    </div>
  </div>
  <hr/>
@endfor


@endsection

@section('footers')

@endsection
