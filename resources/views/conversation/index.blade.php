'@extends('layouts.master')

@section('title', 'Mensagens')

@section('content')

	<link rel="stylesheet" href="{{ asset("css/style_conversation_index.css") }}">


	<div class="container">
		<div class="row">
		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h1>Conversas</h1>
					<a href="{{ route('conversations.create') }}">Nova conversa</a><br>
		  	</div>


		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div class="well-top"></div>
			@foreach ($convs as $conv)
				<div class="well">
				<a href="{{ route('conversations.show', $conv->id) }}">{{ $conv->title }}</a><br>
			</div>
			@endforeach
		</div>
	</div>
</div>



@endsection
