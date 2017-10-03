@extends('/layouts.master')

@section('title', 'Informção sobre a propaganda')

@section('content')

  <link href="{{ asset('css/style_ad_index.css') }}" rel="stylesheet">

	<form method="GET" action="{{ route('ads.search') }}">
		<input type="text" name="search" />
		<input type="submit" />
	</form>
  <!--
      <div class="btn-group-vertical filtro-pesquisa" role="group" aria-label="...">
        <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="panel-heading">Filtro de Pesquisa</div>
              <div class="list-group">
  								<a href="{{ route('ads.index', ['o' => 'desc']) }}"
  									class="list-group-item {{ $filter == 'new' ? 'active' : '' }}">Mais Recentes</a>
                  <a href="{{ route('ads.index', ['o' => 'asc']) }}"
  									class="list-group-item {{ $filter == 'old' ? 'active' : '' }}">Mais Antigos</a>
  								<a href="{{ route('ads.index', ['f' => 'm', 'o' => 'asc']) }}"
  									class="list-group-item {{ $filter == 'cheap' ? 'active' : '' }}">Mais Baratos</a>
  								<a href="{{ route('ads.index', ['f' => 'm', 'o' => 'desc']) }}"
  									class="list-group-item {{ $filter == 'expensive' ? 'active' : '' }}">Mais Caros</a>
              </div>
            </div>
            </div>
            </div>
          </div>
  -->


	<div class="container">
		<div class="row">
			@foreach($ads as $ad)
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="well">
            <div class="rounded">
  						<a href="{{ route('ads.show', $ad->id) }}">
  							@if (Storage::exists('public/ads/' . $ad->id))
  								<img  class="img-rounded" src="{{ asset(Storage::url('public/ads/' . $ad->id)) }}" alt="{{ $ad->full_name }}">
  							@else
  								<img class="img-rounded" src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg" alt="{{ $ad->full_name }}">
  							@endif
  						</a>
          </div>

            <!--Titulo do Anúcio-->
						<h4>
              <a class="titulo-anucio" href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a>
						</h4>

            <!--descrição do conteudo-->
						    <p class="text-justify texto">{{ $ad->description }}</p>

            <!--usuario do anuncio-->
						<p class="titulo-user-anuncio">Anunciante:
  						 <a  class="user-anucio"  href="{{ route('users.show', $ad->creator->id) }}">{{ $ad->creator->name }}
  							  <i class="fa fa-user" aria-hidden="true"></i>
  						 </a>
						</p>
            <!--valor da propaganda-->
						@if ($ad->price == 0)
							<p class="price"style="color: green;">Free<i class="fa fa-gift" aria-hidden="true" style="color:green;"></i></p>
						@else
							<p class="price">Preço: {{ $ad->priceF }}</p>
						@endif

						<p class="phone">Contato: {{ $ad->contact }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>

{{ $ads->appends(request()->query())->links() }}


@endsection
