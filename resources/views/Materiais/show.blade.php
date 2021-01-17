@extends('layout')
@section('conteudo')
<h4>Materiais:</h4>
<b>Designação: </b>{{$materiais->designacao}}<br>
<b>Codigo_interno: </b>{{$materiais->codigo_interno}}<br>
<b>Id_Tipo_Equipamento: </b>{{$materiais->id_tipo_equipamento}}<br>
<b>Observações: </b>{{$materiais->observacoes}}<br>
<br>
<a href="{{route('materiais.edit' , ['id'=>$materiais->id_material])}}" class="btn btn-secondary">Editar Material</a>
<a href="{{route('materiais.delete' , ['id'=>$materiais->id_material])}}" class="btn btn-secondary">Eliminar Material</a>
@endsection