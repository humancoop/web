@extends('layouts.layout')

@section('title', 'Territorios liberados saharauis')

@section('content')
  <h1 class="text-6xl text-center">Territorios liberados saharauis</h1>
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ asset('assets/images/coche_dia.jpg') }}"/>
	</div>
	<p class='text-justify py-4'>	
		Aquí va el texto que va a escribir Cristina.
	</p>
	@include('squares')
@endsection
