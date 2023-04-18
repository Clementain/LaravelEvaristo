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

Route::get('/DptoCaballeros', 'MiControladorUsuarios@uCaballeros')->name('DptoCaballeros');

Route::get('/DptoDamas', 'MiControladorUsuarios@uDamas')->name('DptoDamas');

Route::get('/Ninos', 'MiControladorUsuarios@uNinos')->name('Ninos');

Route::get('/Ninas', 'MiControladorUsuarios@uNinas')->name('Ninas');


Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::get('/', 'MiControlador@vistaConNumeroAleatorio')->name('admin');

    Route::get('/clientes', 'MiControladorUsuarios@uClientes')->name('Clientes');
    Route::get('/ventas', 'MiControladorUsuarios@uVentas')->name('Ventas');
    Route::get('/proveedores', 'MiControladorUsuarios@uProveedores')->name('Proveedores');
});
