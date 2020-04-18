@extends('layouts.layout')

@section('title', 'Pediatría')

@section('content')
  <h1 class="text-6xl text-center">Pediatría</h1>
	<div class="bg-gray-400">
        <thumbor
          src="{{ secure_asset('assets/images/pediatria_portada.jpg') }}"
          class="object-cover w-full"
          width="896"
          height=""
        /></thumbor>
	</div>
  <h2 class="text-4xl">Falta texto</h2>
	@include('squares')
@endsection
