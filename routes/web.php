<?php

use Illuminate\Support\Facades\Route;

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
    return view('Usuarios.Datos.reporteDatosFacturacionActual');
});

Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/registro', function () {
    return view('Auth.register');
});

Route::get('/mes', function () {
    return view('Usuarios.Datos.reporteUltimoMes');
});
