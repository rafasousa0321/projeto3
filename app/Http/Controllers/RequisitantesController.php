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

    public function create(){
        $requisitante=Requisitante::all();
        return view ('requisitantes.create', [
            'requisitantes'=>$requisitante,
        ]);
    }

    public function store(Request $req){
        $novoRequisitante = $req->validate([
            'nome'=>['required', 'min:1' ,'max:25'],
            'telefone'=>['nullable', 'min:9', 'max:9'],
            'email'=>['nullable', 'min:1' , 'max:100'],
            'localidade'=>['nullable', 'min:1', 'max:100'],
            'cartao_cidadao'=>['nullable', 'min:8', 'max:8'],
            'id_tipo_requisitante'=>['required'],
        ]);
        $requisitante = $req->id_requisitante;
        $requisitante = Requisitante::create($novoRequisitante);
        return redirect()->route('requisitantes.show', [
            'id'=>$requisitante->id_requisitante
        ]);
    }

    public function edit(Request $req){
        $editarRequisitante = $req->id;
        $requisitante = Requisitante::where('id_requisitante', $editarRequisitante)->first();
        return view('requisitantes.edit', [
            'requisitante'=>$requisitante
        ]);
    }

    public function update(Request $req){
        $editarRequisitante = $req->id;
        $requisitante = Requisitante::where('id_requisitante', $editarRequisitante)->first();
        $editarRequisitante = $req->validate([
            'nome'=>['required', 'min:1' ,'max:25'],
            'telefone'=>['nullable', 'min:9', 'max:9'],
            'email'=>['nullable', 'min:1' , 'max:100'],
            'localidade'=>['nullable', 'min:1', 'max:100'],
            'cartao_cidadao'=>['nullable', 'min:8', 'max:8'],
            'id_tipo_requisitante'=>['required'],
        ]);
        $requisitante->update($editarRequisitante);
        return redirect()->route('requisitantes.show', [
            'id'=>$requisitante->id_requisitante
        ]);
    }
}
