@extends('layouts.layout')

@section('title', '¿Quiénes somos?')

@section('content')
  <h1 class="text-center text-6xl">¿Quiénes somos?</h1>
	<div class="bg-gray-400">
        <thumbor
          src="{{ secure_asset('assets/images/manos.jpg') }}"
          class="object-cover w-full"
          width="896"
          height=""
        /></thumbor>
	</div>
	<div class="flex mb-4">
		<div class="w-5/6 px-6">
			<p class='text-justify py-4'>
				HumanCoop es una Asociación de Voluntarios para la Cooperación y el Desarrollo,
				que nace en 2019 para actuar en países y zonas del mundo en las que su
				intervención y colaboración pueda resultar de utilidad social.
			</p>
			<p class='text-justify py-4'>
				La asociación es producto de las inquietudes de un amplio y variado grupo
				de voluntarios, con experiencia acumulada en diversos países de África. Desde
				2014 desarrollamos un proyecto de cooperación en el Sáhara Occidental bajo la
				cobertura de Dentalcoop (Asociación de Voluntarios para la Salud Dental), pues
				inicialmente el proyecto se ceñía al área odontológica. Con el paso del tiempo, se
				ha ampliado el alcance del proyecto, contando con diferentes profesionales de la
				salud: médicos de familia, internistas, pediatras, ginecólogos, oftalmólogos… así
				como enfermeros, auxiliares, técnicos de laboratorio y farmacéuticos. También
				contamos con profesionales no sanitarios, como ingenieros, mecánicos, abogados,
				administrativos, periodistas... En definitiva, un GRAN EQUIPO DE PERSONAS
				con formaciones diferentes pero COMPROMETIDAS e ILUSIONADAS por un
				objetivo común, apostando por hacer “algo más”, y luchando, ahora como
				HumanCoop, para el desarrollo de poblaciones desfavorecidas.
			</p>
			<p class='text-justify py-4'>
				Entre los proyectos que lleva a cabo HumanCoop se encuentran la
				FORMACIÓN Y EMPODERAMIENTO de personal local para el desarrollo de un
				sistema de salud propio; actividades de Promoción para la Salud y PREVENCIÓN
				de enfermedades y la ASISTENCIA con comisiones especializadas en distintas
				ramas de la salud. Todo ello con un enfoque INTEGRAL y HUMANÍSTICO, tanto
				de las poblaciones objeto de nuestra actuación como de nuestros propios
				voluntarios.
			</p>
			<p class='text-justify py-4'>
				HumanCoop nace de las PERSONAS que la forman. Somos Personas que
				conectamos con Personas, y siempre damos la máxima importancia al voluntario y
				a su experiencia en este proyecto.
				¿TE SUMAS A CAMBIAR EL MUNDO?
			</p>
		</div>
		<div class="w-1/6">
			<a href="/quienes-somos/junta">
			<div class="max-w-sm overflow-hidden bg-gray-500 my-2">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Junta</div>
				</div>
			</div>
			</a>
			<a href="/quienes-somos/estatutos">
			<div class="max-w-sm overflow-hidden bg-gray-500 my-2">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Estatutos</div>
				</div>
			</div>
			</a>
			<a href="/quienes-somos/memorias">
			<div class="max-w-sm overflow-hidden bg-gray-500 my-2">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Memorias</div>
				</div>
			</div>
			</a>
		</div>
		</div>
	</div>
@stop
