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

Route::get('/', 'InicioController')->name('inicio');

Route::get('/servicios', 'ServiciosController@index')->name('servicios');

//Route::get()->name('registro');

//Route::get()->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
