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
    return view('home');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/sucursales', function () {
    return view('sucursales');
})->name('sucursales');