<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function index() {
        return view('form');
    }

    public function resultado(Request $request) {
        $distancia = $request->distancia;
        $consumo = $request->consumoMedio;
        $precoCombustivel = $request->precoCombustivel;
        $pedagio =  $request ->custoPedagio;

        $litrosnecessarios = $distancia/$consumo;
        $valorCombustivel = $litrosnecessarios * $precoCombustivel;

        $valorTotal = round($valorCombustivel+$pedagio, 2 );


        return view('resultado', compact('litrosnecessarios', 'valorTotal'));
    }
}
