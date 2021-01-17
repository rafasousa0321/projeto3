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

    public function show(Request $req){
        $idTipos_requisitantes = $req ->id;
        $tipo_requisitante = Tipo_Requisitante::where('id_tipo_requisitante', $idTipos_requisitantes)->first();
        return view('tipos_requisitantes.show', [
            'tipo_requisitante' => $tipo_requisitante
        ]);
    }

    public function create(){
        $tipos_requisitantes=Tipo_Requisitante::all();
        return view ('tipos_requisitantes.create', [
            'tipos_requisitantes'=>$tipos_requisitantes,
        ]);
    }

    public function store(Request $req){
        $novoTipo_Requisitante = $req->validate([
            'tipo'=>['required', 'min:1', 'max:100'],
        ]);
        $tipos_requisitantes = $req->id_tipo_requisitante;
        $tipos_requisitantes = Tipo_Requisitante::create($novoTipo_Requisitante);
        return redirect()->route('tipos_requisitantes.show', [
            'id'=>$tipos_requisitantes->id_tipo_requisitante
        ]);
    }

    public function edit(Request $req){
        $editarTipo_Requisitante = $req->id;
        $tipo_requisitante = Tipo_Requisitante::where('id_tipo_requisitante', $editarTipo_Requisitante)->first();
        return view('tipos_requisitantes.edit', [
            'tipo_requisitante'=>$tipo_requisitante
        ]);
    }

    public function update(Request $req){
        $editarTipo_Requisitante = $req->id;
        $tipo_requisitante = Tipo_Requisitante::where('id_tipo_requisitante', $editarTipo_Requisitante)->first();
        $editarTipo_Requisitante = $req->validate([
            'tipo'=>['required', 'min:1', 'max:100'],
        ]);
        $tipo_requisitante->update($editarTipo_Requisitante);
        return redirect()->route('tipos_requisitantes.show', [
            'id'=>$tipo_requisitante->id_tipo_requisitante
        ]);
    }

    public function delete(Request $req){
        $tipo_requisitante = Tipo_Requisitante::where('id_tipo_requisitante', $req->id)->first();
        return view('tipos_requisitantes.delete',
            ['tipo_requisitante'=>$tipo_requisitante
        ]);
    }

    public function destroy(Request $req){
        $tipo_requisitante = Tipo_Requisitante::where('id_tipo_requisitante', $req->id)->first();
        $tipo_requisitante->delete();
        return redirect()->route('tipos_requisitantes.index');
        }
    }
