@extends('layouts.admin')

@section('title', 'Recordar contraseña')

@section('content')
		<div class="flex justify-center">
			<div class="w-full max-w-xs">
				<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
					<div class="mb-6">
						<label class="block text-gray-700 text-sm font-bold mb-2" for="email">
							Email
						</label>
						<input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email">
						<p class="text-red-500 text-xs italic">Por favor, introduzca el email.</p>
					</div>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
						Recordar contraseña
					</button>
				</form>
			</div>
		</div>
@endsection
