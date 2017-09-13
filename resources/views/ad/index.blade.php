@extends('/layouts.master')

@section('title', 'Informção sobre a propaganda')

@section('content')

  <div id="topo">
      <p> falta implementar</p>
    </div>

    <div class="btn-group-vertical" role="group" aria-label="...">
      <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel-heading">Filtro de Pesquisa</div>
            <div class="list-group">
                <a href="#" class="list-group-item active"> Todos</a>
                <a href="#" class="list-group-item">Mais Recentes</a>
                <a href="#" class="list-group-item">Mais Antigos</a>
                <a href="#" class="list-group-item">falta ideia</a>
                <a href="#" class="list-group-item">falta ideia</a>
            </div>
          </div>
          </div>
          </div>
        </div>
    </div>


@foreach($ads as $ad)
  <div class="container-fluid position">
    <div class="row-fluid ">
      <div class="col-xs-12 col-sm-6 col-md-4">
      		  @if (Storage::exists('public/ads/' . $ad->id))
      			  <img id="size_img" src="{{ asset(Storage::url('public/ads/' . $ad->id)) }}"
              class="rounded float-left img-thumbnail" alt="{{ $ad->full_name }}">
      		  @else
      			<img id="size_img" src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg"
              class="rounded float-left img-thumbnail" alt="{{ $ad->full_name }}">
      		@endif
        </div>
        <div class="col-xs-12 col-sm-6 col-md-8">

            <h4 class="">{{ $ad->title }}</h4>

              <p class="d-incline-block text-trucate font-weight-normal ss"> {{ $ad->description }} </p>
    					<p class="font-weight-normal ss">Anunciante:
    						<a class="font-weight-normal ss" href="{{ route('users.show', $ad->creator->id) }}">{{ $ad->creator->name }}
    					</p>
    					<p class="font-weight-normal ss"><a href="{{ route('ads.show', $ad->id) }}">Informação sobre serviço</a></p>
              <p class="ss">Telefone: {{ $ad->contact }}</p>

        </div>
      </div>
    <hr>
    </div>

@endforeach


@endsection
