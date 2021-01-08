@extends('layout')
@section('conteudo')
<h4>Requisitantes:</h4>
@foreach($requisitantes as $requisitante)
    <li>
        <b><a style="color: black" href="{{route('requisitantes.show', ['id'=>$requisitante->id_requisitante])}}"></b>
        <b>{{$requisitante->nome}}</b><br>
    </li>
@endforeach
<br>
<a href="{{route('requisitantes.create' , ['id'=>$requisitante->id_requisitante])}}" class="btn btn-secondary">Novo Requisitante</a>
@endsection