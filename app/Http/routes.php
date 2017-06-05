<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('main', function () {
    return view('main');
});

Route::resource('asignaturas','AsignaturasController');
Route::resource('programasAcademicos','ProgramasAcademicosController');
Route::resource('usuarios','UsuariosController');
Route::resource('perfiles','PerfilesController');
Route::resource('horarios','HorariosController');
Route::resource('grupos','GruposController');
Route::resource('log','LogController');


