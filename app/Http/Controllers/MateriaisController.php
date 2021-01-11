<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MateriaisController extends Controller
{
    public function index(){
        $materiais = Material::all();
        return view('materiais.index', [
            'materiais' => $materiais
        ]);
    }

    public function show(Request $req){
        $idMateriais = $req ->id;
        $materiais = Material::where('id_material', $idMateriais)->first();
        return view('materiais.show', [
            'materiais' => $materiais
        ]);
    }

    public function create(){
        $materiais=Material::all();
        return view ('materiais.create', [
            'materiais'=>$materiais,
        ]);
    }

    public function store(Request $req){
        $novoMaterial = $req->validate([
            'id_tipo_equipamento'=>['required', 'numeric', 'min:1', 'max:10'],
            'designacao'=>['nullable', 'min:1', 'max:100'],
            'codigo_interno'=>['required','numeric' ,'min:1', 'max:10'],
            'observacoes'=>['nullable', 'min:1', 'max:100']
        ]);
        $materiais = $req->id_material;
        $materiais = Material::create($novoMaterial);
        return redirect()->route('materiais.show', [
            'id'=>$materiais->id_material
        ]);
    }
}
