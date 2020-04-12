@extends('layouts.layout')

@section('title', '¿Qué hacemos?')

@section('content')
  <h1 class="text-6xl text-center">¿Qué hacemos?</h1>
	<div class="flex mb-4">
		<div class="w-1/2 p-4">
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded shadow-lg p-4 bg-white">
				<img class="w-full" src="{{ asset('assets/images/Human-coop-sahara.png') }}"/>
			</div>
			</a>
		</div>
	</div>
@stop
