@extends('layouts.layout')

@section('title', 'Medicina general')

@section('content')
  <h1 class="text-6xl text-center">Medicina general</h1>
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ secure_asset('assets/images/medicina_portada.jpg') }}"/>
	</div>
  <h2 class="text-4xl">Falta texto</h2>
	@include('squares')
@endsection
