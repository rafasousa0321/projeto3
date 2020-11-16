@extends('layout')
<h4>Requisições:</h4>
<b>Id_Requisição: </b>{{$requisicao->id_requisicao}}<br>
<b>Data Requisição: </b>{{$requisicao->data_requisicao}}<br>
<b>Data Prevista Entrega: </b>{{$requisicao->data_prevista_entrega}}<br>
<b>Data Entrega: </b>{{$requisicao->data_entrega}}<br>
<b>Data Renovação: </b>{{$requisicao->data_renovacao}}<br>
<b>Hora Renovação: </b>{{$requisicao->hora_requisicao}}<br>
<b>Hora Entrega: </b>{{$requisicao->hora_entrega}}<br>
<b>Id_Material: </b>{{$requisicao->id_material}}<br>
<b>Id_Tipo_Equipamento: </b>{{$requisicao->id_tipo_equipamento}}<br>
<b>Id_Requisitantes: </b>{{$requisicao->id_requisitantes}}<br>
@section('conteudo')
@endsection