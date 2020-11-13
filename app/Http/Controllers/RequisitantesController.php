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
}
