<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    use HasFactory;
    protected $primaryKey="id_requisicao";
    protected $table="requisicoes";

    public function materiais(){
        return $this->hasMany(
            'App\Models\Material',
            'id_material'
        );
    }

    public function tipos_equipamentos(){
        return $this->hasMany(
            'App\Models\Tipo_Equipamento',
            'id_tipo_equipamento'
        );
    }

    public function requisitantes(){
        return $this->hasMany(
            'App\Models\Requisitantes',
            'id_requisitante'
        );
    }
}
