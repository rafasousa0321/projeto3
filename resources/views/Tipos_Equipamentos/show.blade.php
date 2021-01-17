@extends('layout')
@section('conteudo')
<h4>Requisitantes:</h4>
<b>Id_Tipo_Equipamento: </b>{{$tipo_equipamento->id_tipo_equipamento}}<br>
<b>Descrição: </b>{{$tipo_equipamento->descricao}}<br>

<br>
<a href="{{route('tipos_equipamentos.edit' , ['id'=>$tipo_equipamento->id_tipo_equipamento])}}" class="btn btn-secondary">Editar Tipo de Equipamento</a>
<a href="{{route('tipos_equipamentos.delete' , ['id'=>$tipo_equipamento->id_tipo_equipamento])}}" class="btn btn-secondary">Eliminar Tipo de Equipamento</a>
@endsection
