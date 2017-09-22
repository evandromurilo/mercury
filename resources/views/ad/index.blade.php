@extends('/layouts.master')

@section('title', 'Informção sobre a propaganda')

@section('content')

  <link href="{{ asset('css/style_ad_index.css') }}" rel="stylesheet">



@foreach($ads as $ad)

<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">

				<a href="{{ route('ads.show', $ad->id) }}">
      		  @if (Storage::exists('public/ads/' . $ad->id))
      			  <img  src="{{ asset(Storage::url('public/ads/' . $ad->id)) }}" alt="{{ $ad->full_name }}">
      		  @else
      			<img  src="https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg" alt="{{ $ad->full_name }}">
      		@endif
				</a>
                  <div class="caption">
                        <h4>
            							<a href="{{ route('ads.show', $ad->id) }}">{{ $ad->title }}</a>
            						</h4>

                          <p class="text-justify" > {{ $ad->description }} </p>
                					<p>Anunciante:
            								<a  href="{{ route('users.show', $ad->creator->id) }}">{{ $ad->creator->name }}</a>
                					</p>

            							@if ($ad->price == 0)
            									<p style="color: green;">Free</p>
            							@else
            									<p>Preço: {{ $ad->priceF }}</p>
            							@endif

                          <p>Contato: {{ $ad->contact }}</p>
                      </div>
          </div>
        </div>
      </div>
    </div>



@endforeach

{{ $ads->appends(request()->query())->links() }}


@endsection
