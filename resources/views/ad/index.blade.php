@extends('/layouts.master')

@section('title', 'Informção sobre a propaganda')

@section('content')

  <div id="topo">
      <p> falta implementar</p>
    </div>
@foreach($ads as $ad)
  <div class="cotainer view_ads card">
    <div class="row ">
      <div class="col-xs-6">
		  @if (Storage::exists('public/ads/' . $ad->id))
			  <img id="size_img" src="{{ asset(Storage::url('public/ads/' . $ad->id)) }}"
        class="rounded float-left img-thumbnail" alt="{{ $ad->full_name }}">
		  @else
			<img id="size_img" src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg"
        class="rounded float-left img-thumbnail" alt="{{ $ad->full_name }}">
		@endif
      </div>
      <div class="col-xs-6 space-img">
        <h3 class="font-weight-normal">{{ $ad->title }}</h3>

          <p class="d-incline-block text-trucate font-weight-normal" style="max-width: 500px;"> {{ $ad->description }} </p>
					<p class="font-weight-normal">Anunciante:
						<a class="font-weight-normal" href="{{ route('users.show', $ad->creator->id) }}">{{ $ad->creator->name }}
					</p>
					<p class="font-weight-normal"><a href="{{ route('ads.show', $ad->id) }}">Informação sobre serviço</a></p>
          <p>Telefone: {{ $ad->contact }}</p>
      </div>
    </div>
  </div>
  <hr/>
@endforeach


@endsection
