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

Route::get('/personal', function () {
    return "Testing personal";
});

Route::get('/usuarios', function () {
    return "Testing usuarios";
});

Route::group(['prefix'=>'admin', 'as'=>'admin'], function(){
    Route::get('/', function(){
        return view('admin');
    });
    Route::get('/usuarios', function(){
        return view('layout.usuarios');
    });
});

