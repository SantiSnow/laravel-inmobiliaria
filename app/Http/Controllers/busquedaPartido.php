<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inmueble;

class busquedaPartido extends Controller
{

    public function busquedaPorPartido(Request $req){

        $partido = $req->get('partido');

        $inmuebles = Inmueble::where('Partido', $partido)
            ->orderBy('Partido', 'desc')
            ->get();

        return view('resultadosPartido', compact('inmuebles'));
    }
}
