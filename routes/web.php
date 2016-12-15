<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//se muestran todas las categorias que hay
Route::get('/home', 'HomeController@index');
//se muestra formulario para crear categorias
Route::get('/home/createCategories', 'CatalogoController@index');
//resive los de categoria datos para insertarlos a las bdd
Route::post('/home','CatalogoController@createCategory');
//Se muestras los productos de las respectivas categorias
Route::get('/home/products', 'CatalogoController@indexProducts');
//se muestra formato para crear nuevos productos
Route::get('/home/createProducts', 'CatalogoController@indexCreateProducts');
//resive los de productos datos para insertarlos a las bdd
Route::post('/home/products','CatalogoController@createProducts');
