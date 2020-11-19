@extends('layout')
@section('conteudo')
<h4>Tipos de Requisitantes:</h4>
@foreach($tipos_requisitantes as $tipo_requisitante)
    <li>
        <b><a style="color: black" href="{{route('tipos_requisitantes.show', ['id'=>$tipo_requisitante->id_tipo_requisitante])}}"></b>
        <b>{{$tipo_requisitante->tipo}}</b><br>
    </li>
@endforeach
@endsection