<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Equipamento;

class Tipos_EquipamentosController extends Controller
{
    public function index(){
        $tipos_equipamentos = Tipo_Equipamento::all();
        return view('tipos_equipamentos.index', [
            'tipos_equipamentos' => $tipos_equipamentos
        ]);
    }
}
