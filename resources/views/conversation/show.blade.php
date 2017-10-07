@extends('layouts.master')

@section('title', $conv->title)

@section('content')

	<link href="{{ asset('css/style_conversation_show.css') }}" rel="stylesheet">

	<div class="container">
		<div class="row">
			<div class="col-md-4">
	<h1>{{ $conv->title }}</h1>
			</div>
				<div class="col-md-8">
	@foreach ($conv->messages as $msg)
					<div>
									<p>Enviada por:
									<a href="{{ route('users.show', $msg->imgUrl) }}"></p>
													{{ $msg->author->name }}
									</a>
									<p> {{ $msg->body }} </p>
					</div>
	@endforeach

	<!--lista de msg todas as msg-->

	<form class="" method="POST" action="{{ route('messages.store') }}">
				<div class="form-group">
					<input type="text" class="form-control mensagem" name="body" placeholder="Mensagem...">
				</div>
					<input type="hidden" name="conversation_id" value="{{ $conv->id }}">
					{{ csrf_field() }}
					<div class="form-group">
					<input type="submit" class="btn btn-primary">
				</div>
	</form>
<!--end msg-->
<!--grupo de bottom envio de delete -->
	<form id="form" action="{{ route('conversations.destroy', $conv->id) }}" method="POST">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<a onclick="document.getElementById('form').submit();" href="#">Deletar</a>
	</form>
<!--end bottom-->
@endsection
</div>
</div>
</div>
