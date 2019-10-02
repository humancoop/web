@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-6xl">Panel de control</h1>
    <hr></hr>
		<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/usuarios">
			Gestión de usuarios
		</a>
    <hr></hr>
		<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/crear-post">
			Añadir entrada al blog
		</a>
@endsection
