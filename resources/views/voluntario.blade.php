@extends('layouts.layout')

@section('title', 'Hazte socio')

@section('content')
    <h1 class="text-6xl text-center">Hazte voluntario</h1>
    <form class="p-10 w-full bg-gray-400 rounded" method="POST" action="/voluntario">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="first_name" value="{{old('first_name')}}" name="first_name" type="text" placeholder="Nombre">
                @error('first_name')
					<ul>
						@foreach ($errors->get('first_name') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Apellidos
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="last_name" value="{{old('last_name')}}" name="last_name" type="text" placeholder="Apellidos">
                @error('last_name')
					<ul>
						@foreach ($errors->get('last_name') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Lugar de nacimiento
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="birthplace" value="{{old('birthplace')}}" name="birthplace" type="text" placeholder="Lugar de nacimiento">
                @error('birthplace')
					<ul>
						@foreach ($errors->get('birthplace') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Fecha de nacimiento
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="birthdate" value="{{old('birthdate')}}" name="birthdate" type="date" placeholder="Fecha de nacimiento">
                @error('birthdate')
					<ul>
						@foreach ($errors->get('birthdate') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Dirección
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="address" value="{{old('address')}}" name="address" type="text" placeholder="Domicilio">
                @error('address')
					<ul>
						@foreach ($errors->get('address') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Localidad
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="city" value="{{old('city')}}" name="city" type="text" placeholder="Localidad">
                @error('city')
					<ul>
						@foreach ($errors->get('city') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Provincia
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="province" value="{{old('province')}}" name="province" type="select" placeholder="Provincia">
                @error('province')
					<ul>
						@foreach ($errors->get('province') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Código postal
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="postal_code" value="{{old('postal_code')}}" name="postal_code" type="text" placeholder="Código postal">
                @error('postal_code')
					<ul>
						@foreach ($errors->get('postal_code') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Email
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="email" value="{{old('email')}}" name="email" type="email" placeholder="E-mail">
                @error('email')
	 			<ul>
					@foreach ($errors->get('email') as $error)
						<li class="text-red-500 text-xs italic">{{ $error }}</li>
					@endforeach
				</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Teléfono móvil
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="phone_number" value="{{old('phone_number')}}" name="phone_number" type="tel" placeholder="Teléfono móvil">
                @error('phone_number')
					<ul>
						@foreach ($errors->get('phone_number') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Móvil de contacto familiar
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="secondary_phone_number" value="{{old('secondary_phone_number')}}" name="secondary_phone_number" type="tel" placeholder="Móvil de contacto familiar">
                @error('secondary_phone_number')
					<ul>
						@foreach ($errors->get('secondary_phone_number') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Estado civil
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="marital_status" value="{{old('marital_status')}}" name="marital_status" type="text" placeholder="Estado civil">
                @error('marital_status')
					<ul>
						@foreach ($errors->get('marital_status') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Número de hijos
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="children_number" value="{{old('children_number')}}" name="children_number" type="number" min="0" placeholder="Número de hijos">
                @error('children_number')
					<ul>
						@foreach ($errors->get('children_number') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre del padre
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="father_name" value="{{old('father_name')}}" name="father_name" type="text" placeholder="Nombre del padre">
                @error('father_name')
					<ul>
						@foreach ($errors->get('father_name') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre de la madre
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="mother_name" value="{{old('mother_name')}}" name="mother_name" type="text" placeholder="Nombre de la madre">
                @error('mother_name')
					<ul>
						@foreach ($errors->get('mother_name') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nif
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="nif" value="{{old('nif')}}" name="nif" type="text" placeholder="Nif">
                @error('nif')
					<ul>
						@foreach ($errors->get('nif') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Número de pasaporte
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="passport_number" value="{{old('passport_number')}}" name="passport_number" type="text" placeholder="Número de pasaporte">
                @error('passport_number')
					<ul>
						@foreach ($errors->get('passport_number') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Fecha de expedición
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="issue_date" value="{{old('issue_date')}}" name="issue_date" type="date" placeholder="Fecha de expedición">
                @error('issue_date')
					<ul>
						@foreach ($errors->get('issue_date') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Lugar de expedición
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="issue_location" value="{{old('issue_location')}}" name="issue_location" type="text" placeholder="Lugar de expedición">
                @error('issue_location')
					<ul>
						@foreach ($errors->get('issue_location') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Fecha de validez
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="validity_date" value="{{old('validity_date')}}" name="validity_date" type="date" placeholder="Fecha de validez">
                @error('issue_date')
					<ul>
						@foreach ($errors->get('issue_date') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Ya soy socio de Humancoop
                </label>
                <label class="text-gray-700 text-xs font-bold uppercase">No</label>
                <div class="relative inline-block w-10 mr-2 ml-2 align-middle select-none">
                    <input type="checkbox" value="1" {{ old('already_a_member') == 1 ? ' checked' : '' }} name="already_a_member" id="already_a_member" class="toggle-checkbox transition duration-200 ease-in-out absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                    <label for="toggle" class="toggle-label block transition duration-200 ease-in-out overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                </div>
                <label class="text-gray-700 text-xs font-bold uppercase">Sí</label>
                @error('already_a_member')
					<ul>
						@foreach ($errors->get('already_a_member') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Número de cuenta voluntario
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="account_number" value="{{old('account_number')}}" name="account_number" type="text" placeholder="Número de cuenta voluntario">
                @error('account_number')
					<ul>
						@foreach ($errors->get('account_number') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Alergias
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="allergies" value="{{old('allergies')}}" name="allergies" type="text" placeholder="Alergias">
                @error('allergies')
					<ul>
						@foreach ($errors->get('allergies') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Intolerancias
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="intolerances" value="{{old('intolerances')}}" name="intolerances" type="text" placeholder="Intolerancias">
                @error('intolerances')
					<ul>
						@foreach ($errors->get('intolerances') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Enfermedades previas (opcional)
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="previous_illnesses" value="{{old('previous_illnesses')}}" name="previous_illnesses" type="text" placeholder="Efermedades previas">
                @error('previous_illnesses')
					<ul>
						@foreach ($errors->get('previous_illnesses') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Medicación previa (opcional)
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="medication" value="{{old('medication')}}" name="medication" type="text" placeholder="Medicación previa">
                @error('medication')
					<ul>
						@foreach ($errors->get('medication') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Soy sanitario
                </label>
                <label class="text-gray-700 text-xs font-bold uppercase">No</label>
                <div class="relative inline-block w-10 mr-2 ml-2 align-middle select-none">
                    <input type="checkbox" {{ old('is_sanitary') == 1 ? ' checked' : '' }} value="1" name="is_sanitary" id="is_sanitary" class="toggle-checkbox transition duration-200 ease-in-out absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                    <label for="toggle" class="toggle-label block transition duration-200 ease-in-out overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                </div>
                <label class="text-gray-700 text-xs font-bold uppercase">Sí</label>
                @error('is_sanitary')
					<ul>
						@foreach ($errors->get('is_sanitary') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Formación
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="training" value="{{old('training')}}" name="training" type="text" placeholder="Formación">
                @error('training')
					<ul>
						@foreach ($errors->get('training') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Especialidad (si procede)
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="speciality" value="{{old('speciality')}}" name="speciality" type="text" placeholder="Especialidad">
                @error('speciality')
					<ul>
						@foreach ($errors->get('speciality') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Experiencia profesional
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="professional_experience" value="{{old('professional_experience')}}" name="professional_experience" type="text" placeholder="Experiencia profesional">
                @error('professional_experience')
					<ul>
						@foreach ($errors->get('professional_experience') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Años de experiencia
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="years_of_experience" value="{{old('years_of_experience')}}" name="years_of_experience" min="0" type="number" placeholder="Años de experiencia">
                @error('years_of_experience')
					<ul>
						@foreach ($errors->get('years_of_experience') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Motivaciones
                </label>
                <textarea class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="motivations" name="motivations" type="text" placeholder="Motivaciones">{{old('motivations')}}</textarea>
                @error('motivations')
					<ul>
						@foreach ($errors->get('motivations') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Tengo experiencia en voluntariado
                </label>
                <label class="text-gray-700 text-xs font-bold uppercase">No</label>
                <div class="relative inline-block w-10 mr-2 ml-2 align-middle select-none">
                    <input type="checkbox" {{ old('has_volunteering_experience') == 1 ? ' checked' : '' }} value="1" name="has_volunteering_experience" id="has_volunteering_experience" class="toggle-checkbox transition duration-200 ease-in-out absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                    <label for="toggle" class="toggle-label block transition duration-200 ease-in-out overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                </div>
                <label class="text-gray-700 text-xs font-bold uppercase">Sí</label>
                @error('has_volunteering_experience')
					<ul>
						@foreach ($errors->get('has_volunteering_experience') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Actividad desarrollada
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="volunteering_experience_info" value="{{old('volunteering_experience_info')}}" name="volunteering_experience_info" type="text" placeholder="Actividad desarrollada">
                @error('volunteering_experience_info')
					<ul>
						@foreach ($errors->get('volunteering_experience_info') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Es mi primera vez en Humancoop
                </label>
                <label class="text-gray-700 text-xs font-bold uppercase">No</label>
                <div class="relative inline-block w-10 mr-2 ml-2 align-middle select-none">
                    <input type="checkbox" {{ old('first_time_in_humancoop') == 1 ? ' checked' : '' }} value="1" name="first_time_in_humancoop" id="first_time_in_humancoop" class="toggle-checkbox transition duration-200 ease-in-out absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                    <label for="toggle" class="toggle-label block transition duration-200 ease-in-out overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                </div>
                <label class="text-gray-700 text-xs font-bold uppercase">Sí</label>
                @error('first_time_in_humancoop')
					<ul>
						@foreach ($errors->get('first_time_in_humancoop') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    ¿Dónde nos conociste?
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="where_did_you_know" value="{{old('where_did_you_know')}}" name="where_did_you_know" type="text" placeholder="¿Dónde nos conociste?">
                @error('where_did_you_know')
					<ul>
						@foreach ($errors->get('where_did_you_know') as $error)
							<li class="text-red-500 text-xs italic">{{ $error }}</li>
						@endforeach
					</ul>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center">
            <button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">
                Enviar
            </button>
        </div>
    </form>
@stop
