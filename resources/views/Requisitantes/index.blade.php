@extends('layout')
<h4>Requisitantes:</h4>
@foreach($requisitantes as $requisitante)
<li>
<b>{{$requisitante->nome}}</b><br>
</li>
@endforeach
@section('conteudo')
@endsection