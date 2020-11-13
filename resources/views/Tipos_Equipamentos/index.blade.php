@extends('layout')
<h4>Tipos de Equipamentos:</h4>
@foreach($tipos_equipamentos as $tipo_equipamento)
<li>
<b>{{$tipo_equipamento->descricao}}</b><br>
</li>
@endforeach
@section('conteudo')
@endsection