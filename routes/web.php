<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inmueble;
use App\Http\Controllers\busquedaPartido;
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

    $inmuebles_destacados = Inmueble::where('Destacada', 1)
        ->orderBy('id')
        ->get();

    return view('welcome', compact('inmuebles_destacados'));
});

Route::get('/propiedades', function (){

    $inmuebles = Inmueble::all();

    return view('propiedades', compact('inmuebles'));
});

Route::get('/sobre-nosotros', function (){
    return view('sobreNosotros');
});

Route::get('/contacto', function (){
    return view('contacto');
});

Route::get('/propiedad/{id}', function ($id){
    $propiedad = Inmueble::find($id);
    return view('propiedad', compact('propiedad'));
});

Route::post('/propiedades-encontradas', [busquedaPartido::class, 'busquedaPorPartido']);

