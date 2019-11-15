@extends('layouts.layout')

@section('title', 'Pediatría')

@section('content')
  <h1 class="text-6xl text-center">Pediatría</h1>
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ asset('assets/images/pediatria_portada.jpg') }}"/>
	</div>
  <h2 class="text-4xl">Falta texto</h2>
	@include('squares')
@endsection
