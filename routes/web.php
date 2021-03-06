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


Route::get('/hola', function () {
    return 'HOLA MUNDO';
});

Route::get('/hola2',function(){
    return view('hola');
});

Route::get('/adios',function(){
    return view('nueva.adios');
});

Route::get('hola/{nombre}',function($nombre){
    return 'hola '.$nombre;
});

Route::get('libros','bookController@prueba')->name('libros.prueba');
