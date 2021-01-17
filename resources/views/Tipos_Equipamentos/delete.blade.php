@extends('layout')
@section('conteudo')
<h3>Deseja mesmo eliminar o tipo de equipamento "{{$tipo_equipamento->id_tipo_equipamento}}"?</h3>
<form action="{{route('tipos_equipamentos.destroy', ['id'=>$tipo_equipamento->id_tipo_equipamento])}}" method="post">
    @csrf
    @method('delete')
    <input type="hidden" value="{{$tipo_equipamento->id_tipo_equipamento}}">
    <input type="submit" value="Eliminar">
</form>
@endsection