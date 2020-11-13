@extends('layout')
<h4>Tipos de Requisitantes:</h4>
@foreach($tipos_requisitantes as $tipo_requisitante)
<li>
<b>{{$tipo_requisitante->tipo}}</b><br>
</li>
@endforeach
@section('conteudo')
@endsection