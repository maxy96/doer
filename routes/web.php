<?php

Route::get('/', 'InicioController')->name('inicio');

Route::get('/servicios', 'ServiciosController@index')->name('servicios')->middleware('verified');

//Route::get()->name('registro');

//Route::get()->name('login');
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
