@extends('layout')
@section('conteudo')
<h4>Materiais:</h4>
@foreach($materiais as $material)
    <li>
        <b><a style="color: black" href="{{route('materiais.show', ['id'=>$material->id_material])}}"></b>
        <b>{{$material->designacao}}</b><br>
    </li>
@endforeach
<br>
<a href="{{route('materiais.create' , ['id'=>$material->id_material])}}" class="btn btn-secondary">Novo Material</a>
@endsection