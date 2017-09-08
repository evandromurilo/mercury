@extends('/layouts.master')

@section('title', 'Informção sobre a propaganda')

@section('content')

  <div id="topo">
      <p> falta implementar</p>
    </div>
@foreach($ads as $ad)
  <div class="cotainer view_ads">
    <div class="row">
      <div class="col-xs-6">
        <img id="size_img" src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg"
        class="rounded float-lenf img-thumbnail" alt="">
      </div>
      <div class="col-xs-6 space-img">
        <h3 class="">{{ $ad->title }}</h3>

          <p class="d-incline-block text-trucate" style="max-width: 300px;"> {{ $ad->description }} </p>
          <p>nome</p>
          <p><a href="#">Informação sobre serviço</a></p>
          <p>Telefone: {{ $ad->contact }}</p>
          <p><a href="#">visita o perfil</a></p>

      </div>
    </div>
  </div>
  <hr/>
@endforeach


@endsection
