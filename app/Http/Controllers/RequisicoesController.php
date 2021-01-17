<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisicao;
use App\Models\Requisitante;
use App\Models\Material;

class RequisicoesController extends Controller
{
    public function index(){
        $requisicoes = Requisicao::all();
        return view('requisicoes.index', [
            'requisicoes' => $requisicoes
        ]);
    }

    public function show(Request $req){
        $idRequisicoes = $req ->id;
        $requisicao = Requisicao::where('id_requisicao', $idRequisicoes)->first();
        return view('requisicoes.show', [
            'requisicao' => $requisicao
        ]);
    }

    public function create(){
        $requisitantes=Requisitante::all();
        $materiais=Material::all();
        return view ('requisicoes.create', [
            'requisitantes'=>$requisitantes,
            'materiais'=>$materiais
        ]);
    }

    public function store(Request $req){
        $novaRequisicao = $req->validate([
            'data_requisicao'=>['nullable', 'date'],
            'data_prevista_entrega'=>['nullable', 'date'],
            'data_entrega'=>['nullable', 'date'],
            'entregue'=>['nullable', 'numeric'],
            'renovou'=>['nullable', 'numeric'],
            'hora_requisicao'=>['nullable'],
            'hora_entrega'=>['nullable',],
            'id_material'=>['nullable', 'numeric'],
            'id_tipo_equipamento'=>['nullable', 'numeric'],
            'id_requisitantes'=>['required', 'numeric'],
            'observacoes'=>['nullable', 'min:1', 'max:255']
        ]);
        $requisitantes = $req->id_requisitante;
        $materiais = $req->id_material;
        $requisicao = Requisicao::create($novaRequisicao);
        return redirect()->route('requisicoes.show', [
            'id'=>$requisicao->id_requisicao
        ]);
    }

    public function edit(Request $req){
        $editarRequisicao = $req->id;
        $requisicao = Requisicao::where('id_requisicao', $editarRequisicao)->first();
        return view('requisicoes.edit', [
            'requisicao'=>$requisicao
        ]);
    }

    public function update(Request $req){
        $editarRequisicao = $req->id;
        $requisicao = Requisicao::where('id_requisicao', $editarRequisicao)->first();
        $editarRequisicao = $req->validate([
            'data_requisicao'=>['nullable', 'date'],
            'data_prevista_entrega'=>['nullable', 'date'],
            'data_entrega'=>['nullable', 'date'],
            'entregue'=>['nullable', 'numeric'],
            'renovou'=>['nullable', 'numeric'],
            'hora_requisicao'=>['nullable'],
            'hora_entrega'=>['nullable',],
            'id_material'=>['nullable', 'numeric'],
            'id_tipo_equipamento'=>['nullable', 'numeric'],
            'id_requisitantes'=>['required', 'numeric'],
            'observacoes'=>['nullable', 'min:1', 'max:255']
        ]);
        $requisicao->update($editarRequisicao);
        $requisitantes = $req->id_requisitante;
        $materiais = $req->id_material;
        return redirect()->route('requisicoes.show', [
            'id'=>$requisicao->id_requisicao
        ]);
    }

    public function delete(Request $req){
        $requisicao = Requisicao::where('id_requisicao', $req->id)->first();
        return view('requisicoes.delete',
            ['requisicao'=>$requisicao
        ]);
    }

    public function destroy(Request $req){
        $requisicao = Requisicao::where('id_requisicao', $req->id)->first();
        $requisicao->delete();
        return redirect()->route('requisicoes.index');
        }

    }