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

    $inmuebles_destacados = 'Todos los inmuebles se mostrarán aca';

    return view('welcome', compact('inmuebles_destacados'));
});

Route::get('/sobre-nosotros', function (){
    return 'Esta es la pagina sobre nosotros';
});

Route::get('/contacto', function (){
    return 'Esta es la pagina de contacto';
});
