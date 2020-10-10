@extends('layouts.layout')

@section('title', 'Hazte socio')

@section('content')
    @if (true)
        <h2 class="text-4xl text-center">Este contenido no está disponible todavía</h2>
    @else
        <h1 class="text-6xl text-center">Hazte socio</h1>
        <form class="p-10 w-full bg-gray-400 rounded" method="POST" action="/socio">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre y apellidos
                    </label>
                    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="full_name" value="{{old('full_name')}}" name="full_name" type="text" placeholder="Nombre y apellidos">
                    @error('full_name')
                        <ul>
                            @foreach ($errors->get('full_name') as $error)
                                <li class="text-red-500 text-xs italic">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
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
                        Otro número de contacto
                    </label>
                    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="secondary_phone_number" value="{{old('secondary_phone_number')}}" name="secondary_phone_number" type="tel" placeholder="Otro número de contacto">
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
            </div>
            <div class="flex flex-wrap -mx-3 mb-12">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Número de cuenta (IBAN)
                    </label>
                    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="account_number" value="{{old('account_number')}}" name="account_number" type="text" placeholder="Número de cuenta (IBAN)">
                    @error('account_number')
                        <ul>
                            @foreach ($errors->get('account_number') as $error)
                                <li class="text-red-500 text-xs italic">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre del titular
                    </label>
                    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="account_owner_name" value="{{old('account_owner_name')}}" name="account_owner_name" type="text" placeholder="Nombre del titular">
                    @error('account_owner_name')
                        <ul>
                            @foreach ($errors->get('account_owner_name') as $error)
                                <li class="text-red-500 text-xs italic">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-12">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Aportación (€)
                    </label>
                    <div class="relative">
                        <select class="appearance-none border-2 bg-white border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="amount" value="{{old('amount')}}" name="amount" placeholder="Aportación">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('amount')
                        <ul>
                            @foreach ($errors->get('amount') as $error)
                                <li class="text-red-500 text-xs italic">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Perodicidad
                    </label>
                    <div class="relative">
                        <select class="appearance-none bg-white border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="period" value="{{old('period')}}" name="period" placeholder="Periodicidad">
                            <option value="1">Mensual</option>
                            <option value="2">Trimestral</option>
                            <option value="3">Semestral</option>
                            <option value="4">Anual</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('period')
                        <ul>
                            @foreach ($errors->get('period') as $error)
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
    @endif
@stop
