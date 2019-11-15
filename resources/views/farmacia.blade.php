@extends('layouts.layout')

@section('title', 'Farmacia')

@section('content')
  <h1 class="text-6xl text-center">Farmacia</h1>
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ asset('assets/images/farmacia_portada.jpg') }}"/>
	</div>
  <h2 class="text-4xl">Falta texto</h2>
	@include('squares')
@endsection
