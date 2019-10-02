@extends('layouts.admin')

@section('title', 'Login')

@section('content')
		<div class="flex justify-center">
			<div class="w-full max-w-xs">
				<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
					<div class="mb-4">
						<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
							Usuario
						</label>
						<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
					</div>
					<div class="mb-6">
						<label class="block text-gray-700 text-sm font-bold mb-2" for="password">
							Contraseña
						</label>
						<input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
						<p class="text-red-500 text-xs italic">Por favor, introduzca la contraseña.</p>
					</div>
					<div class="flex items-center justify-between">
						<a href="/admin">
							<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
								Acceder
							</button>
						</a>
						<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/recordar-contrasena">
							Recordar contraseña
						</a>
					</div>
				</form>
			</div>
		</div>
@endsection
