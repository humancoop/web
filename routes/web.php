<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/donacion', function () {
    return view('donacion');
});
Route::get('/que-puedes-hacer-tu', function () {
    return view('que-puedes-hacer-tu');
});
Route::get('/que-hacemos', function () {
    return view('que-hacemos');
});
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});
Route::get('/socio', function () {
    return view('socio');
});
Route::get('/voluntario', function () {
    return view('voluntario');
});
Route::get('/prueba', function () {
    return view('prueba');
});
