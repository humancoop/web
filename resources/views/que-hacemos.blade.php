@extends('layouts.layout')

@section('title', '¿Qué hacemos?')

@section('content')
  <h1 class="text-6xl text-center">¿Qué hacemos?</h1>
	<div class="flex mb-4">
		<div class="w-1/2 p-4">
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded overflow-hidden shadow-lg">
				<img class="w-full" src="{{ asset('assets/images/coche_dia.jpg') }}"/>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Territorios liberados saharauis</div>
				</div>
			</div>
			</a>
		</div>
	</div>
@stop
