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
Route::get('/territorios-liberados-saharauis', function () {
    return view('territorios-liberados-saharauis');
});
Route::get('/territorios-liberados-saharauis/oftalmologia', function () {
    return view('oftalmologia');
});
Route::get('/territorios-liberados-saharauis/odontologia', function () {
    return view('odontologia');
});
Route::get('/territorios-liberados-saharauis/enfermeria', function () {
    return view('enfermeria');
});
Route::get('/territorios-liberados-saharauis/laboratorio', function () {
    return view('laboratorio');
});
Route::get('/territorios-liberados-saharauis/medicina-general', function () {
    return view('medicina-general');
});
Route::get('/territorios-liberados-saharauis/ginecologia', function () {
    return view('ginecologia');
});
Route::get('/territorios-liberados-saharauis/farmacia', function () {
    return view('farmacia');
});
Route::get('/territorios-liberados-saharauis/pediatria', function () {
    return view('pediatria');
});
