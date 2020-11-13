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
}
