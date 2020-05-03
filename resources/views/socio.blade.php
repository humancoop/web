@extends('layouts.layout')

@section('title', 'Hazte socio')

@section('content')
    <h1 class="text-6xl text-center">Hazte socio</h1>
    <form class="p-10 w-full bg-gray-400 rounded" method="POST" action="/socio">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre y apellidos
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="full_name" name="full_name" type="text" placeholder="Nombre y apellidos">
                @error('full_name')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Lugar de nacimiento
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="birthplace" name="birthplace" type="text" placeholder="Lugar de nacimiento">
                @error('birthdate')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Fecha de nacimiento
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="birthdate" name="birthdate" type="date" placeholder="Fecha de nacimiento">
                @error('birthplace')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Provincia
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="province" name="province" type="select" placeholder="Provincia">
                @error('province')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Código postal
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="postal_code" name="postal_code" type="text" placeholder="Código postal">
                @error('postal_code')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Dirección
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="address" name="address" type="text" placeholder="Domicilio">
                @error('address')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Localidad
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="city" name="city" type="text" placeholder="Localidad">
                @error('city')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Provincia
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="province" name="province" type="select" placeholder="Provincia">
                @error('province')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Email
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="email" name="email" type="email" placeholder="E-mail">
                @error('email')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Teléfono móvil
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="phone_number" name="phone_number" type="tel" placeholder="Teléfono móvil">
                @error('phone_number')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Otro número de contacto
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="secondary_phone_number" name="secondary_phone_number" type="tel" placeholder="Otro móvil de contacto">
                @error('secondary_phone_number')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nif
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="nif" name="nif" type="text" placeholder="Nif">
                @error('nif')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Número de pasaporte
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="passport_number" name="passport_number" type="text" placeholder="Número de pasaporte">
                @error('passport_number')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre del padre
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="father_name" name="father_name" type="text" placeholder="Nombre del padre">
                @error('father_name')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre de la madre
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="mother_name" name="mother_name" type="text" placeholder="Nombre de la madre">
                @error('mother_name')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Fecha de expedición
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="issue_date" name="issue_date" type="date" placeholder="Fecha de expedición">
                @error('issue_date')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Lugar de expedición
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="issue_location" name="issue_location" type="text" placeholder="Lugar de expedición">
                @error('issue_location')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Fecha de validez
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="validity_date" name="validity_date" type="date" placeholder="Fecha de validez">
                @error('issue_date')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Ya soy socio de Humancoop
                </label>
                <input class="mr-2 leading-tight" type="checkbox">
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Número de cuenta voluntario
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="account_number" name="account_number" type="text" placeholder="Número de cuenta voluntario">
                @error('account_number')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Soy sanitario
                </label>
                <input class="mr-2 leading-tight" type="checkbox">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Formación
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="training" name="training" type="text" placeholder="Formación">
                @error('training')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Especialidad
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="speciality" name="speciality" type="text" placeholder="Especialidad">
                @error('speciality')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Experiencia profesional
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="professional_experience" name="professional_experience" type="text" placeholder="Experiencia profesional">
                @error('professional_experience')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Años de experiencia
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="years_of_experience" name="years_of_experience" min="0" type="number" placeholder="Años de experiencia">
                @error('years_of_experience')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Motivaciones
                </label>
                <textarea class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="motivations" name="motivations" type="text" placeholder="Motivaciones"></textarea>
                @error('motivations')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Tengo experiencia en voluntariado
                </label>
                <input class="mr-2 leading-tight" type="checkbox">
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Actividad desarrollada
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="volunteering_experience_info" name="volunteering_experience_info" type="text" placeholder="Actividad desarrollada">
                @error('volunteering_experience_info')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Es mi primera vez en Humancoop
                </label>
                <input class="mr-2 leading-tight" type="checkbox">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    ¿Dónde nos conociste?
                </label>
                <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="where_did_you_know" name="where_did_you_know" type="text" placeholder="Experiencia profesional">
                @error('where_did_you_know')
                    <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
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
