<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisitante extends Model
{
    use HasFactory;
    protected $primaryKey="id_requisitante";
    protected $table="requisitantes";

    public function requisicoes(){
        return $this->belongsTo(
            'App\Models\Requisicoes',
            'id_requisitante'
        );
    }

    public function tipos_requisitantes(){
        return $this->belongsTo(
            'App\Models\Tipo_Requisitante',
            'id_tipo_requisitante'
        );
    }
}
