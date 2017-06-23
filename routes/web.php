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
    return view('home');
});

Route::get('/ejemplo', 'ejemploController@index');

Route::get('/registrarProyecto', 'proyectosController@registrar');

Route::post('/guardarProyecto', 'proyectosController@guardar');

Route::get('/consultarProyectos', 'proyectosController@consultar');

Route::get('/eliminarProyecto/{id}', 'proyectosController@eliminar');











