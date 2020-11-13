<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $primaryKey="id_material";
    protected $table="materiais";
    
    public function requisicoes(){
        return $this->belongsTo(
            'App\Models\Requisicoes',
            'id_material'
        );
    }

    public function tipos_equipamentos(){
        return $this->belongsTo(
            'App\Models\Tipo_Equipamento',
            'id_tipo_equipamento'
        );
    }
}