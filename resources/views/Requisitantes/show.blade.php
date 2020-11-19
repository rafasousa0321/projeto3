@extends('layout')
@section('conteudo')
<h4>Requisitantes:</h4>
<b>Id_Requisitante: </b>{{$requisitante->id_requisitante}}<br>
<b>Nome: </b>{{$requisitante->nome}}<br>
<b>Telefone: </b>{{$requisitante->telefone}}<br>
<b>E-mail: </b>{{$requisitante->email}}<br>
<b>Localidade: </b>{{$requisitante->localidade}}<br>
<b>Cartão de Cidadão: </b>{{$requisitante->cartao_cidadao}}<br>
<b>Id_Tipo_Requisitante: </b>{{$requisitante->id_tipo_requisitante}}<br>
@endsection