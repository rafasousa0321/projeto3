@extends('layout')
@section('conteudo')
<h3>Deseja mesmo eliminar o material "{{$material->id_material}}"?</h3>
<form action="{{route('materiais.destroy', ['id'=>$material->id_material])}}" method="post">
    @csrf
    @method('delete')
    <input type="hidden" value="{{$material->id_material}}">
    <input type="submit" value="Eliminar">
</form>
@endsection