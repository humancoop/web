@extends('layouts.layout')

@section('title', 'Blog')

@section('content')
    <h1 class="text-6xl">Blog</h1>
    <hr></hr>

		<!-- Entrada 1 -->

		<div class="max-w-sm w-full lg:max-w-full lg:flex my-6">
			<div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://www.africa.com/wp-content/uploads/2010/04/western-sahara.jpg')" title="Foto de prueba">
			</div>
			<div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
				<div class="mb-8">
					<p class="text-sm text-gray-600 flex items-center">
						2 de Octubre de 2019
					</p>
					<div class="text-gray-900 font-bold text-xl mb-2">Ejemplo de entrada en el blog</div>
					<p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
					<a href="#" class="text-teal-600">Leer más...</a>
				</div>
				<div class="flex items-center">
					<img class="w-10 h-10 rounded-full mr-4" src="https://i0.wp.com/castiglioninylon.com.uy/wp-content/uploads/2018/09/portrait-square-03.jpg?ssl=1" alt="Avatar of Autor de prueba">
					<div class="text-sm">
						<p class="text-gray-900 leading-none">Autor de prueba</p>
						<p class="text-gray-600">Cargo de prueba</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Entrada 2 -->
		<div class="max-w-sm w-full lg:max-w-full lg:flex my-6">
			<div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://www.africa.com/wp-content/uploads/2010/04/western-sahara.jpg')" title="Foto de prueba">
			</div>
			<div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
				<div class="mb-8">
					<p class="text-sm text-gray-600 flex items-center">
						3 de Octubre de 2019
					</p>
					<div class="text-gray-900 font-bold text-xl mb-2">Otro ejemplo de entrada en el blog</div>
					<p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
					<a href="#" class="text-teal-600">Leer más...</a>
				</div>
				<div class="flex items-center">
					<img class="w-10 h-10 rounded-full mr-4" src="https://i0.wp.com/castiglioninylon.com.uy/wp-content/uploads/2018/09/portrait-square-03.jpg?ssl=1" alt="Avatar of Autor de prueba">
					<div class="text-sm">
						<p class="text-gray-900 leading-none">Autor de prueba</p>
						<p class="text-gray-600">Cargo de prueba</p>
					</div>
				</div>
			</div>
		</div>
		{{ $items->links() }}
@stop
