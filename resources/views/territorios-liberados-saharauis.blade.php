@extends('layouts.layout')

@section('title', 'Territorios liberados saharauis')

@section('content')
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
	</div>
  <h1 class="text-6xl text-center">Territorios liberados saharauis</h1>
	<div class="flex mb-4">
		<div class="w-5/6 bg-gray-400">
			<p class='text-justify py-4'>	
				Aquí va el texto que va a escribir Cristina.
			</p>
		</div>
		<div class="w-1/6 bg-gray-500">
			<a href="/territorios-liberados-saharauis/odontologia">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Odontología</div>
				</div>
			</div>
			</a>
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Medicina general</div>
				</div>
			</div>
			</a>
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Pediatría</div>
				</div>
			</div>
			</a>
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Ginecología</div>
				</div>
			</div>
			</a>
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Laboratorio</div>
				</div>
			</div>
			</a>
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Farmacia</div>
				</div>
			</div>
			</a>
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Enfermería</div>
				</div>
			</div>
			</a>
			<a href="/territorios-liberados-saharauis/oftalmologia">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/manos.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Oftalmología</div>
				</div>
			</div>
			</a>
		</div>
	</div>
@endsection
