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
					<div class="well">
						@foreach ($conv->messages as $msg)
										<div>
											@if(Auth::id() == $msg->from_id)
														<!--<p style="float: right;">Enviada por:
														<a style="color:blue; float: right;" href="{{-- route('users.show', $msg->from_id) --}}"></p>
															{{-- $msg->author->name --}}
														</a>-->
														<p style="background: gold;" class="text-right msg-user"> {{ $msg->body }} </p>
													@else
														<!--<p>Enviada por:
														<a style="color:red;" href="{{-- route('users.show', $msg->from_id) --}}"></p>
															{{-- $msg->author->name --}}
														</a>-->
														<p style="background: green;" class="text-left msg-secundario"> {{ $msg->body }} </p>
													@endif
										</div>
						@endforeach

						<script>
							$(".msg-user").css({'background-color': 'gold'});
						</script>

						<!--lista de msg todas as msg-->
						<form class="form-inline" method="POST" action="{{ route('messages.store') }}">
									<div class="form-group">
										<input type="text" class="form-control menssagem" autocomplete="off" name="body" placeholder="Mensagem...">
									</div>
										<input type="hidden" name="conversation_id" value="{{ $conv->id }}">
										{{ csrf_field() }}

										<input type="submit" class="btn btn-primary">

						</form>
					<!--end msg-->

					<!--grupo de bottom envio de delete -->
					<!--
						<form id="form" action="{{ route('conversations.destroy', $conv->id) }}" method="POST">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<a onclick="document.getElementById('form').submit();" href="#">Deletar</a>
						</form>-->
					<!--end bottom-->
					@endsection
				</div>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var AlturaPagina = $(window).height();

			function Altura(){
				$(".well").height(AlturaPagina);
			}
			Altura();

		</script>
