<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class busquedaCalle extends Controller
{
    public function busquedaPorCalle(Request $req){

        $calle = $req->get('calle');

        $inmuebles = Inmueble::where('Direccion', 'LIKE', '%'.$calle.'%')
            ->orderBy('id', 'desc')
            ->get();

        return view('resultadosCalle', compact('inmuebles'));
    }
}
