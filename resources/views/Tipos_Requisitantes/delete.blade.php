@extends('layout')
@section('conteudo')
<h3>Deseja mesmo eliminar o tipo de requisitante "{{$tipo_requisitante->id_tipo_requisitante}}"?</h3>
<form action="{{route('tipos_requisitantes.destroy', ['id'=>$tipo_requisitante->id_tipo_requisitante])}}" method="post">
    @csrf
    @method('delete')
    <input type="hidden" value="{{$tipo_requisitante->id_tipo_requisitante}}">
    <input type="submit" value="Eliminar">
</form>
@endsection