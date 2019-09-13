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

Route::get('/portafolio', function () {
    return view('portafolio');
});


Route::get('/aboutMe', function () {
    return view('biografia');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('enviar_correo', 'ControladorMail@enviar');
