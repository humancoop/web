@extends('layouts.layout')

@section('title', 'Memorias anuales')

@section('content')
  <h1 class="text-center text-6xl">Memorias anuales</h1>
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ secure_asset('assets/images/portada_memorias.jpg') }}"/>
	</div>
	<div class="flex mb-4">
		<div class="w-5/6 px-6">
			<p class='text-justify py-4'>
                <a href="{{ secure_asset('assets/pdf/memoriaActividades2019.pdf') }}"/>
		            <img src="{{ secure_asset('assets/images/preview_memoria_2019.png') }}"/>
                </a>
			</p>
		</div>
	</div>
@stop
