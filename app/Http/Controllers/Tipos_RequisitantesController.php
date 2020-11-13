<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Requisitante;

class Tipos_RequisitantesController extends Controller
{
    public function index(){
        $tipos_requisitantes = Tipo_Requisitante::all();
        return view('tipos_requisitantes.index', [
            'tipos_requisitantes' => $tipos_requisitantes
        ]);
    }
}
