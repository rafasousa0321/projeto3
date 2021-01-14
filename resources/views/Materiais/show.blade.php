@extends('layout')
@section('conteudo')
<h4>Materiais:</h4>
<b>Designação: </b>{{$materiais->designacao}}<br>
<b>Id_Material: </b>{{$materiais->id_material}}<br>
<b>Id_Tipo_Equipamento: </b>{{$materiais->id_tipo_equipamento}}<br>
@endsection