@extends('layout')
@section('conteudo')
<h3>Deseja mesmo eliminar a requisicao "{{$requisicao->id_requisicao}}"?</h3>
<form action="{{route('requisicoes.destroy', ['id'=>$requisicao->id_requisicao])}}" method="post">
    @csrf
    @method('delete')
    <input type="hidden" value="{{$requisicao->id_requisicao}}">
    <input type="submit" value="Eliminar">
</form>
@endsection