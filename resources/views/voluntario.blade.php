@extends('layouts.layout')

@section('title', 'Hazte voluntario')

@section('content')
    <h1 class="text-6xl text-center">Hazte voluntario</h1>
		<form class="p-10 w-full bg-gray-400">
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Nombre y Apellidos
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Nombre y Apellidos">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						DNI
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="DNI">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Teléfono
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Teléfono">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Correo electrónico
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Correo electrónico">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Lugar de nacimiento
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Lugar de nacimiento">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Fecha de nacimiento
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Fecha de nacimiento">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						País
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="País">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Ciudad
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Ciudad">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Dirección
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Dirección">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Código postal
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Código postal">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3"></div>
				<label class="md:w-2/3 block font-bold">
					<input class="mr-2 leading-tight" type="checkbox">
					<span class="text-sm">
						Aceptas nuestra política de privacidad
					</span>
				</label>
			</div>
			<div class="md:flex md:items-center">
				<div class="md:w-1/3"></div>
				<div class="md:w-2/3">
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
						Enviar
					</button>
				</div>
			</div>
		</form>
@stop
