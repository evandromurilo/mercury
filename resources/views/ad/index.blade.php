@extends('/layouts.master')

@section('title', 'Informção sobre a propaganda')

@section('content')

  <link href="{{ asset('css/style_ad_index.css') }}" rel="stylesheet">

  <div id="topo">
      <p> falta implementar</p>
    </div>

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



@foreach($ads as $ad)
  <div class="container-fluid position">
    <div class="row-fluid ">
      <div class="col-xs-12 col-sm-6 col-md-4">
				<a href="{{ route('ads.show', $ad->id) }}">
      		  @if (Storage::exists('public/ads/' . $ad->id))
      			  <img id="size_img" src="{{ asset(Storage::url('public/ads/' . $ad->id)) }}"
              class="rounded float-left img-thumbnail" alt="{{ $ad->full_name }}">
      		  @else
      			<img id="size_img" src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg"
              class="rounded float-left img-thumbnail" alt="{{ $ad->full_name }}">
      		@endif
				</a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-8">

            <h4 class="">
							<a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a>
						</h4>

              <p class="d-incline-block text-trucate font-weight-normal ss"> {{ $ad->description }} </p>
    					<p class="font-weight-normal ss">Anunciante:
								<a class="font-weight-normal ss" href="{{ route('users.show', $ad->creator->id) }}">{{ $ad->creator->name }}</a>
    					</p>

							@if ($ad->price == 0)
									<p style="color: green;">Free</p>
							@else
									<p>Preço: {{ $ad->priceF }}</p>
							@endif

              <p class="ss">Contato: {{ $ad->contact }}</p>

        </div>

      </div>
    <hr>
    </div>

@endforeach

{{ $ads->appends(request()->query())->links() }}


@endsection
