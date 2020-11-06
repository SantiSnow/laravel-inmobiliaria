<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inmueble;

class Operacion extends Controller
{

    public function Ventas(){
        $ventas = Inmueble::where('Operacion', 'Venta')
            ->orderBy('id', 'desc')
            ->get();

        return view('ventas', compact('ventas'));
    }

    public function Alquileres(){
        $alquileres = Inmueble::where('Operacion', 'Alquiler')
            ->OrderBy('id', 'desc')
            ->get();

        return view('alquileres', compact('alquileres'));
    }
}
