<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class busquedaLocalidad extends Controller
{
    public function busquedaPorLocalidad(Request $req){
        $localidad = $req->get('localidad');

        $inmuebles = Inmueble::where('Localidad', $localidad)
            ->orderBy('Localidad', 'desc')
            ->get();

        return view('resultadosLocalidad', compact('inmuebles'));
    }
}
