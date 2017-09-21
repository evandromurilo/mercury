@extends('layouts.master')

@section('title', $ad->title)

@section('content')

	<link href="{!! asset('css/style_ad_show.css') !!}" rel="stylesheet">


	<h1>{{ $ad->title }}</h1>

		<div class="img-pro">
			<img src="{{ $ad->imgUrl }}">
		</div>

<div class="well">
	<div class="row">
			<h3>Descrição</h3>
			<p style="text-align: justify;">{{ $ad->description }}</p>

			@if ($ad->price == 0)
					<p>Preço: <i class="fa fa-gift" aria-hidden="true" style="color:green;"></i></p>
			@else
					<p>Preço: {{ $ad->priceF }}</p>
			@endif

			<p>Contato: {{ $ad->contact }}</p>

			<p>Criado por:
				<a href={{ route('users.show', $ad->user_id) }}>
					{{ $ad->creator->name }}
				</a></p>
				<p>
				<a href={{ route('messages.create', ['ad' => $ad->id]) }}>Enviar Mensagem<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
			</p>

			@if ($ad->user_id == Auth::id())
					<a href="{{ route('ads.edit', $ad->id) }}">Editar Anúnio<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<form id="form" action="{{ route('ads.destroy', $ad->id) }}" method="POST">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<a onclick="document.getElementById('form').submit();" href="#">Deletar Anúcio<i class="fa fa-trash-o" aria-hidden="true"></i></a>
					</form>

	@endif
	</div>
</div>
@endsection
