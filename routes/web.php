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
    return view('blog')->with('posts', App\Post::paginate(5));
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
Route::get('/admin', function () {
    return view('administracion');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/recordar-contrasena', function () {
    return view('recordar-contrasena');
});
Route::get('/crear-post', function () {
    return view('crear-post');
});
Route::get('/usuarios', function () {
    return view('usuarios');
});
Route::get('/voluntario', function () {
    return view('voluntario');
});
