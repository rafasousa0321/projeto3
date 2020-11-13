<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisicao;

class RequisicoesController extends Controller
{
    public function index(){
        $requisicoes = Requisicao::all();
        return view('requisicoes.index', [
            'requisicoes' => $requisicoes
        ]);
    }
}
