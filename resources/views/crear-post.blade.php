@extends('layouts.admin')

@section('title', 'Crear Post')

@section('content')
		<div class="flex justify-center">
			<div class="w-full">
				<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
					<div class="mb-4">
						<label class="block text-gray-700 text-sm font-bold mb-2" for="title">
							Título
						</label>
						<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Título">
					</div>
					<div class="mb-4">
						<label class="block text-gray-700 text-sm font-bold mb-2" for="title">
							Contenido
						</label>
						<textarea rows=20 class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" placeholder="Escriba el contenido del post">
						</textarea>
					</div>
					<div class="flex items-center justify-between">
						<a href="#">
							<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
								Crear
							</button>
						</a>
					</div>
				</form>
			</div>
		</div>
@endsection
