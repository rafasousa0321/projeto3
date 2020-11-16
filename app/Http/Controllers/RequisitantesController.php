<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisitante;

class RequisitantesController extends Controller
{
    public function index(){
        $requisitantes = Requisitante::all();
        return view('requisitantes.index', [
            'requisitantes' => $requisitantes
        ]);
    }

    public function show(Request $req){
        $idRequisitantes = $req ->id;
        $requisitante = Requisitante::where('id_requisitante', $idRequisitantes)->first();
        return view('requisitantes.show', [
            'requisitante' => $requisitante
        ]);
    }
}
