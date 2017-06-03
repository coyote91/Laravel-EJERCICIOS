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


// TUTORIAL RUTAS   https://www.cloudways.com/blog/routing-in-laravel-5-4/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tabla', function () {

   for($i =1; $i <= 10 ; $i++){

       echo "$i * 5 = ". $i*5 ."<br>";

   }

});

Route::get('/table/{number}', function ($number) {

   for($i =1; $i <= 10 ; $i++){

       echo "$i * $number = ". $i* $number ."<br>";

   }

});



Route::get('/table/{number?}', function ($number = 2) {

   for($i =1; $i <= 10 ; $i++){

       echo "$i * $number = ". $i* $number ."<br>";

   }

});


// como hacer una ruta con restriccion


Route::get('/table/{number?}', function ($number = 2) {

   for($i =1; $i <= 10 ; $i++){

       echo "$i * $number = ". $i* $number ."<br>";

   }

})->where('number', '[0-9]+');  //restriccion



Route::get('/nombre/{nombre}', function ($nombre) {
    return "Mi nombre es " . $nombre ;
});

/*ojo con el signo interrogacion */

Route::get('/edad/{edad?}', function ($edad = 20) {
    return "Mi edad es " . $edad ;
 });



Route::get('posts/{post}/comentario/{com}', function ($postId,$b) {

   //la url debe ser asi   http://localhost:8000/posts/1/comentario/david

    return "parametros son " . $postId ." y ". $b;
});


Route::get('usuario/{id}/nombre/{name}', function ($id, $name) {
    //

   return "los parametros son " . $id . " y tambien ". $name;

})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// enrutamiento con funcion de controlador

//  Route::get('/home', 'YourController@functionname');

// el controlador esta en la ruta /app/Http/Controllers/EdadesController.php


Route::get('tienda','productosController@producto');

Route::get('tuedad/{age?}','EdadesController@edades');

Route::get('tuedaddos/{age?}/comentario/{coment}','EdadesController@edadesdos');
