@extends('layouts.layout')

@section('title', 'Memorias anuales')

@section('content')
  <h1 class="text-center text-6xl">Memorias anuales</h1>
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
	</div>
	<div class="flex mb-4">
		<div class="w-5/6 px-6">
			<p class='text-justify py-4'>
				Listado de memorias anuales
			</p>
		</div>
	</div>
@stop
