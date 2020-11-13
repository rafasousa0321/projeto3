@extends('layout')
<h4>Requisições:</h4>
@foreach($requisicoes as $requisicao)
<li>
<b>{{$requisicao->id_requisicao}}</b><br>
</li>
@endforeach
@section('conteudo')
@endsection