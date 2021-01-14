<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Equipamento extends Model
{
    use HasFactory;
    protected $primaryKey="id_tipo_equipamento";
    protected $table="tipos_equipamentos";
    protected $fillable=[
        'id_tipo_requisitante',
        'descricao'
    ];

    public function requisicoes(){
        return $this->belongsTo(
            'App\Models\Requisicoes',
            'id_tipo_equipamento'
        );
    }

    public function materiais(){
        return $this->hasMany(
            'App\Models\Materiais',
            'id_tipos_equipamentos'
        );
    }
}
