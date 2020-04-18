@extends('layouts.layout')

@section('title', 'Ginecologia y obstetricia')

@section('content')
  <h1 class="text-6xl text-center">Ginecología y obstetricia</h1>
	<div class="bg-gray-400">
        <thumbor
          src="{{ secure_asset('assets/images/ginecologia_portada.jpg') }}"
          class="object-cover w-full"
          width="896"
          height=""
        /></thumbor>
	</div>
	<p class='text-justify py-4'>
 En Territorios Liberados no existe una red sanitaria que permita el control y cribado de las principales patologías ginecoobstétricas. Por ello, y colaborando conjuntamente con el personal saharaui, se está trabajando para asegurar una asistencia integral a la mujer, en especial a la mujer embarazada.
	</p>

	<p class='text-justify py-4'>
Este proyecto tiene varios objetivos, entre los cuales destacan la implantación de distintos programas de cribado ginecoobstétrico; el control del embarazo y postparto con protocolos basados en los de los Campamentos de Refugiados en Argelia; el despistaje de patologías ginecoobstétricas que necesitan derivación urgente o diferida al Hospital Nacional de Rabouni; y la elaboración de un plan integral de educación sexual y reproductiva.
	</p>

	<p class='text-justify py-4'>
Como ves, ¡todavía hay muchísimo trabajo por hacer! ¡Necesitamos tu ayuda!
	</p>
	@include('squares')
@endsection
