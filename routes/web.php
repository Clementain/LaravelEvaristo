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

Route::get('/DptoCaballeros', function () {
    return view('layout.DptoCaballeros');
});

Route::get('/DptoDamas', function () {
    return view('layout.DptoDamas');
});

Route::get('/Ninos', function () {
    return view('layout.Ninos');
});

Route::get('/Ninas', function () {
    return view('layout.Ninas');
});


Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::get('/', 'MiControlador@vistaConNumeroAleatorio')->name('admin');

    Route::get('/clientes', function () {
        return view('layout.clientes');
    });
    Route::get('/ventas', function () {
        return view('layout.ventas');
    });
    Route::get('/proveedores', function () {
        return view('layout.proveedores');
    });
});
