<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class busquedaCodigo extends Controller
{
    public function busquedaPorCodigo(Request $req){
        $codigo = $req->get('codigo');

        $inmueble = Inmueble::find($codigo);

        return view('resultadoCodigo', compact('inmueble'));
    }
}
