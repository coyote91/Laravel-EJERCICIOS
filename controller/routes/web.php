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
    return view('welcome');
});

Route::get('controlador','prueba1Controller@prueba1');

// enrutamiento con funcion de controlador

//  Route::get('/home', 'YourController@functionname');

// el controlador esta en la ruta /app/Http/Controllers/EdadesController.php


Route::get('tuedad/{age?}','EdadController@edades');

Route::get('tuedaddos/{age?}/comentario/{coment}','EdadController@edadesdos');
