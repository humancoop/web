@extends('layouts.layout')

@section('title', 'Memorias anuales')

@section('content')
  <h1 class="text-center text-6xl">Memorias anuales</h1>
	<div class="bg-gray-400">
        <thumbor
          src="{{ secure_asset('assets/images/portada_memorias.jpg') }}"
          class="object-cover w-full"
          width="896"
          height=""
        /></thumbor>
	</div>
	<div class="flex mb-4">
		<div class="w-5/6 px-6">
			<p class='text-justify py-4'>
                <a href="{{ secure_asset('assets/pdf/memoriaActividades2019.pdf') }}"/>
                    <thumbor
                      src="{{ secure_asset('assets/images/preview_memoria_2019.png') }}"
                      width="200"
                      height=""
                    /></thumbor>
                </a>
			</p>
		</div>
	</div>
@stop
