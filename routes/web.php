<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inmueble;
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

    $inmuebles_destacados = Inmueble::all();

    return view('welcome', compact('inmuebles_destacados'));
});

Route::get('/propiedades', function (){
    return view('propiedades');
});

Route::get('/sobre-nosotros', function (){
    return view('sobreNosotros');
});

Route::get('/contacto', function (){
    return view('contacto');
});
