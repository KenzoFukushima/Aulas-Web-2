<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index() {
        $contatos = Contato::all();
        return view('contatos', compact('contatos'));
    }
}
