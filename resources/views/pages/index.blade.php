@extends('layouts.master')

@section('title', 'Index')

@section('content')

	<h1>Lista de Anúncios</h1>
<div class="form-group align-items-center propaganda">

			@foreach($ads as $ad)
				<h2>{{ $ad->name }}</h2>
				<p>{{ $ad->description }}</p>
				<br>
			@endforeach
</div>
@endsection
