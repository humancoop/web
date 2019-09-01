@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
   	<h1>Aquí va la página de inicio</h1>
		<a href="{{ url('/blog') }}">Blog</a>
		<a href="{{ url('/donacion') }}">Donacion</a>
		<a href="{{ url('/quienes-somos') }}">Quiénes somos</a>
		<a href="{{ url('/que-hacemos') }}">Qué hacemos</a>
		<a href="{{ url('/que-puedes-hacer-tu') }}">Qué puedes hacer tú</a>
		<a href="{{ url('/socio') }}">Hazte socio</a>
@endsection
