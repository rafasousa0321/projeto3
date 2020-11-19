@extends('layout')
@section('conteudo')
<h4>Tipos de Equipamentos:</h4>
@foreach($tipos_equipamentos as $tipo_equipamento)
    <li>
        <b><a style="color: black" href="{{route('tipos_equipamentos.show', ['id'=>$tipo_equipamento->id_tipo_equipamento])}}"></b>
        <b>{{$tipo_equipamento->descricao}}</b><br>
    </li>
@endforeach
@endsection