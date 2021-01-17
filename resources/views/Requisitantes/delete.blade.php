@extends('layout')
@section('conteudo')
<h3>Deseja mesmo eliminar o requisitante "{{$requisitante->id_requisitante}}"?</h3>
<form action="{{route('requisitantes.destroy', ['id'=>$requisitante->id_requisitante])}}" method="post">
    @csrf
    @method('delete')
    <input type="hidden" value="{{$requisitante->id_requisitante}}">
    <input type="submit" value="Eliminar">
</form>
@endsection