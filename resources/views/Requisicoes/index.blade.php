@extends('layout')
@section('conteudo')
<h4>Requisições:</h4>
@foreach($requisicoes as $requisicao)
    <li>
        <b><a style="color: black" href="{{route('requisicoes.show', ['id'=>$requisicao->id_requisicao])}}"></b>
            <b>{{$requisicao->id_requisicao}}</b><br>
    </li>
@endforeach
<br>
<a href="{{route('requisicoes.create' , ['id'=>$requisicao->id_requisicao])}}" class="btn btn-secondary">Nova Requisição</a>
@endsection