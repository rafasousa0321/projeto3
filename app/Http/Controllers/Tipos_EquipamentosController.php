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

    public function show(Request $req){
        $idTipos_equipamentos = $req ->id;
        $tipo_equipamento = Tipo_Equipamento::where('id_tipo_equipamento', $idTipos_equipamentos)->first();
        return view('tipos_equipamentos.show', [
            'tipo_equipamento' => $tipo_equipamento
        ]);
    }

    public function create(){
        $tipos_equipamentos=Tipo_equipamento::all();
        return view ('tipos_equipamentos.create', [
            'tipos_equipamentos'=>$tipos_equipamentos,
        ]);
    }

    public function store(Request $req){
        $novoTipo_Equipamento = $req->validate([
            'descricao'=>['required', 'min:1', 'max:100'],
        ]);
        $tipos_equipamentos = $req->id_tipo_equipamento;
        $tipos_equipamentos = Tipo_Equipamento::create($novoTipo_Equipamento);
        return redirect()->route('tipos_equipamentos.show', [
            'id'=>$tipos_equipamentos->id_tipo_equipamento
        ]);
    }

    public function edit(Request $req){
        $editarTipo_Equipamento = $req->id;
        $tipo_equipamento = Tipo_Equipamento::where('id_tipo_equipamento', $editarTipo_Equipamento)->first();
        return view('tipos_equipamentos.edit', [
            'tipo_equipamento'=>$tipo_equipamento
        ]);
    }

    public function update(Request $req){
        $editarTipo_Equipamento = $req->id;
        $tipo_equipamento = Tipo_Equipamento::where('id_tipo_equipamento', $editarTipo_Equipamento)->first();
        $editarTipo_Equipamento = $req->validate([
            'descricao'=>['required', 'min:1', 'max:100'],
        ]);
        $tipo_equipamento->update($editarTipo_Equipamento);
        return redirect()->route('tipos_equipamentos.show', [
            'id'=>$tipo_equipamento->id_tipo_equipamento
        ]);
    }

    public function delete(Request $req){
        $tipo_equipamento = Tipo_Equipamento::where('id_tipo_equipamento', $req->id)->first();
        return view('tipos_equipamentos.delete',
            ['tipo_equipamento'=>$tipo_equipamento
        ]);
    }

    public function destroy(Request $req){
        $tipo_equipamento = Tipo_Equipamento::where('id_tipo_equipamento', $req->id)->first();
        $tipo_equipamento->delete();
        return redirect()->route('tipos_equipamentos.index');
        }
    }