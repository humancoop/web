@extends('layouts.layout')

@section('title', 'Territorios liberados saharauis')

@section('content')
  <h1 class="text-6xl text-center">Territorios liberados saharauis</h1>
	<div class="bg-gray-400">
        <thumbor
          src="{{ secure_asset('assets/images/coche_dia.jpg') }}"
          class="object-cover w-full"
          width="896"
          height=""
        /></thumbor>
	</div>
	<p class='text-justify py-4'>
		HumanCoop Sáhara desarrolla su actividad en los Territorios Liberados del Sáhara Occidental, que comprende el área del Sáhara Occidental que se encuentra al este del muro fronterizo marroquí y al oeste y al norte de las fronteras con Argelia y Mauritania, respectivamente. Territorios liberados se encuentra separado del resto del territorio del Sáhara Occidental por un muro de 2200 kilómetros. Los principales asentamientos son: Agüenit, Bir Lehlu, Bir Tiguisit, Dougaj, Mehaires, Miyek, Tifariti y Zug. La población de los Territorios Liberados se estima en unos 30.000 habitantes.
	</p>

	<p class='text-justify py-4'>
   	Con una frecuencia trimestral, parten desde España grupos multidisciplinares de profesionales sanitarios y no sanitarios, para dar asistencia clínica a la población, formación al personal sanitario local y recopilación de datos con el fin de realizar estudios epidemiológicos en los Territorios Liberados. Desde el punto de vista sanitario, las comisiones incluyen las siguientes áreas de trabajo: Odontología, Atención Primaria, Pediatría, Ginecología y Obstetricia, Oftalmología y Laboratorio.
	</p>

	<p class='text-justify py-4'>
  	En las comisiones se realiza formación de los sanitarios locales y se deja stock de material para que puedan seguir desarrollando su trabajo, consiguiendo autonomía y empoderamiento de la población local.
	</p>

	<p class='text-justify py-4'>
  	En estas comisiones, las zonas específicas de actuación son: Bir-lehlu, Tifariti, Mehaires, Mijek y Agüenit. Allí la asistencia local es escasa, apenas una sola comisión médica anual llevada a cabo por el Ministerio de Sanidad Saharaui, y se encuentran fuera de los objetivos de la cooperación internacional.
	</p>

	<p class='text-justify py-4'>
   	Las comisiones cuentan con el apoyo del Ministerio de Salud Saharaui, lo cual proporciona viabilidad a los proyectos realizados allí.
	</p>
	@include('squares')
@endsection
