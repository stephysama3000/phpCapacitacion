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
    return view('index');
});

Route::get('/crear', function () {
    return view('crear_alumno');
});

Route::get('/test', function () {
    $nombre = "Stephy";
    return view('prueba',compact('nombre'));
});

Route::get('/vista1', function () {
    return view('vista1');
});

Route::get('/vista2', function () {
    return view('vista2');
});