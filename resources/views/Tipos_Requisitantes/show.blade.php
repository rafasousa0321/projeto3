@extends('layout')
@section('conteudo')
<h4>Requisitantes:</h4>
<b>Id_Tipo_Requisitante: </b>{{$tipo_requisitante->id_tipo_requisitante}}<br>
<b>Tipo: </b>{{$tipo_requisitante->tipo}}<br>

<br>
<a href="{{route('tipos_requisitantes.edit' , ['id'=>$tipo_requisitante->id_tipo_requisitante])}}" class="btn btn-secondary">Editar Tipo de Requisitante</a>
<a href="{{route('tipos_requisitantes.delete' , ['id'=>$tipo_requisitante->id_tipo_requisitante])}}" class="btn btn-secondary">Eliminar Tipo de Requisitante</a>
@endsection