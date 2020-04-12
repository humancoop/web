@extends('layouts.layout')

@section('title', 'Odontología')

@section('content')
  <h1 class="text-6xl text-center">Odontología</h1>
	<div class="bg-gray-400">
		<img class="object-cover w-full" src="{{ secure_asset('assets/images/odontologia_portada.jpg') }}"/>
	</div>
  <h2 class="text-4xl">Plan de escuelas de salud bucodental</h2>
	<p class='text-justify py-4'>	
		Con el Plan de Escuelas, queremos garantizar que todo el alumnado realice en la
		escuela:
		<ul>
			<li>Un cepillado diario.</li>
			<li>Una aplicación de flúor (la temporalidad del flúor depende del tipo aplicado).</li>
		</ul>
	</p>	
	<p class='text-justify py-4'>	
		Queremos ayudar a crear generaciones de niños y niñas saharauis con hábitos
		saludables en materia de higiene bucodental y nutrición, que contribuyan a mejorar
		sus expectativas de bienestar físico, psíquico y social en el futuro.
	</p>	
	<p class='text-justify py-4'>	
		El programa favorecerá, por un lado, la creación de un hábito de vida saludable
		para el futuro de los niños y niñas saharauis y, por otro, fomentará, a través de la
		educación en salud, la importancia de las revisiones anuales odontológicas y el
		mantenimiento preventivo para evitar enfermedades bucodentales.
	</p>	
  <h2 class="text-4xl">Plan de prótesis dental</h2>
	<p class='text-justify py-4'>	
		Una gran proporción de la población saharaui nómada de esta zona sufre pérdida
		parcial o total de piezas dentarias, debido al consumo de té muy azucarado,
		escasa o nula atención odontológica, y ausencia casi total de consciencia sobre
		higiene bucodental.
	</p>	
	<p class='text-justify py-4'>	
		En muchas ocasiones, en las consultas de las Comisiones Dentales se acaban por
		extraer varias piezas, sin posibilidad, a día de hoy, de su sustitución por prótesis
		dentales. Por ello, muchos pacientes son reacios a acudir a las revisiones, ya que
		saben que no se les van a rehabilitar sus piezas perdidas. Con el Servicio de
		Prótesis pueden cambiar la visión generalizada y acudir más al dentista, ya que se
		podrán reponer dichas piezas. También se dará solución a los problemas
		mandibulares, digestivos, de fonación, encías y estéticos.
	</p>	
	<p class='text-justify py-4'>	
		Actividades:
		<ul>
			<li>Re-instalación y mantenimiento del laboratorio de Rabouni en los Campamentos de Refugiados de Tindouf.</li>
			<li>Instalación de laboratorio de prótesis en el Hospital de Tifariti (T. Liberados).</li>
			<li>Comisiones periódicas.</li>
			<li>Formación de profesionales locales para su empoderamiento.</li>
		</ul>
	</p>	
	<p class='text-justify py-4'>	
		<ul>
			<li>¿Te gusta la cooperación internacional? ¡Hazte voluntario, te necesitamos!</li>
			<li>¿Te sumas a cambiar el Mundo?</li>
			<li>¿Eres Protésico?</li>
		</ul>
	</p>	
	@include('squares')
@endsection
