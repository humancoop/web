@extends('layouts.layout')

@section('title', '¿Qué puedes hacer tú?')

@section('content')
  <h1 class="text-6xl text-center">¿Qué puedes hacer tú?</h1>
	<div class="flex mb-4">
		<div class="w-1/3 p-4">
			<a href="/donacion">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Haz una donación</div>
				</div>
			</div>
			</a>
		</div>
		<div class="w-1/3 p-4">
			<a href="/socio">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Hazte socio</div>
				</div>
			</div>
			</a>
		</div>
		<div class="w-1/3 p-4">
			<a href="/voluntario">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Hazte voluntario</div>
				</div>
			</div>
			</a>
		</div>
	</div>
@stop
