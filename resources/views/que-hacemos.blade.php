@extends('layouts.layout')

@section('title', '¿Qué hacemos?')

@section('content')
  <h1 class="text-6xl text-center">¿Qué hacemos?</h1>
	<div class="flex mb-4">
		<div class="w-1/2 p-4">
			<a href="/territorios-liberados-saharauis">
			<div class="max-w-sm rounded shadow-lg p-4 bg-white">
                <thumbor
                  src="{{ secure_asset('assets/images/Human-coop-sahara.png') }}"
                  width="352"
                  height=""
                  class="w-full"
                /></thumbor>
			</div>
			</a>
		</div>
	</div>
@stop
