@extends('layouts.admin')

@section('title', 'Login')

@section('content')
<form class="mt-6 p-10 w-full bg-gray-400 rounded" method="POST" action="/login">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Usuario
            </label>
            <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="user" value="{{old('user')}}" name="user" type="text" placeholder="Usuario">
            @error('user')
                <ul>
                    @foreach ($errors->get('user') as $error)
                        <li class="text-red-500 text-xs italic">{{ $error }}</li>
                    @endforeach
                </ul>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Contraseña
            </label>
            <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" id="password" value="{{old('password')}}" name="password" type="password" placeholder="Contraseña">
            @error('password')
                <ul>
                    @foreach ($errors->get('password') as $error)
                        <li class="text-red-500 text-xs italic">{{ $error }}</li>
                    @endforeach
                </ul>
            @enderror
        </div>
    </div>
    <div class="md:flex md:items-center">
        <button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">
            Acceder
        </button>
    </div>
</form>
@endsection
