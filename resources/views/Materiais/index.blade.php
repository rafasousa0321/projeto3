@extends('layout')
<h4>Materiais:</h4>
@foreach($materiais as $material)
<li>
<b>{{$material->designacao}}</b><br>
</li>
@endforeach
@section('conteudo')
@endsection