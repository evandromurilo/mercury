@extends('layouts.master')

@section('title', $ad->title)

@section('content')

	<link href="{!! asset('css/style_ad_show.css') !!}" rel="stylesheet">

<div class="container">
	<div class="row">
	<h1>{{ $ad->title }}</h1>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="img-pro">
			<img src="{{ $ad->imgUrl }}">
		</div>

<div class="well">
	<div class="txt">
			<h3>Descrição do Anúncio</h3>
			<p>{{ $ad->description }}</p>

			@if ($ad->price == 0)
					<p>Preço: <i class="fa fa-gift" aria-hidden="true" style="color:green;"></i></p>
			@else
					<p>Preço: {{ $ad->priceF }}</p>
			@endif

			<p>Contato: {{ $ad->contact }}</p>

			<p>Criado por:
				<a class="style-color" href={{ route('users.show', $ad->user_id) }} >
					{{ $ad->creator->name }} <i class="fa fa-user" aria-hidden="true"></i>
				</a>
			</p>
			<p>
					<a class="style-color" href={{ route('conversations.create', ['ad' => $ad->id]) }}>Enviar Mensagem
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</a>
			</p>

				<div>
							@if ($ad->user_id == Auth::id())
									<a href="{{ route('ads.edit', $ad->id) }}">Editar Anúnio<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									<form id="form" action="{{ route('ads.destroy', $ad->id) }}" method="POST">
											{{ method_field('DELETE') }}
											{{ csrf_field() }}
											<a onclick="document.getElementById('form').submit();" href="#">Deletar Anúcio<i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</form>
				</div>
	@endif
	</div>
	</div>
	</div>
</div>
@endsection
