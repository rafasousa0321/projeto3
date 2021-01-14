@extends('layout')
@section('conteudo')
<form action="{{route('requisicoes.store')}}" enctype="multipart/form-data" method="post">
    @csrf 

    <b>Data da Requisição: </b><input type="date" name="data_requisicao" value="{{old('data_requisicao')}}"><br>
    @if ($errors-> has('data_requisicao'))
        <span style="color:red">O formato da data deve ser (DD/MM/YYYY).</span><br><br>
    @endif<br>

    <b>Data prevista para a entrega: </b><input type="date" name="data_prevista_entrega" value="{{old('data_prevista_entrega')}}"><br>
    @if ($errors-> has('data_prevista_entrega'))
        <span style="color:red">O formato da data deve ser (DD/MM/YYYY).</span><br><br>
    @endif<br>

    <b>Data entrega: </b><input type="date" name="data_entrega" value="{{old('data_entrega')}}"><br>
    @if ($errors-> has('data_entrega'))
        <span style="color:red">O formato da data deve ser (DD/MM/YYYY).</span><br><br>
    @endif<br>

    <b>Data renovação: </b><input type="date" name="data_renovacao" value="{{old('data_renovacao')}}"><br>
    @if ($errors-> has('data_renovacao'))
        <span style="color:red">O formato da data deve ser (DD/MM/YYYY).</span><br><br>
    @endif<br>

    <b>Entregue: </b><input type="text" name="entregue" value="{{old('entrgue')}}"><br>
    @if ($errors-> has('entregue'))
        <span style="color:red">Selecione se foi ou não entregue (1 ou 0).</span><br><br>
    @endif<br>

    <b>Renovou: </b><input type="text" name="renovou" value="{{old('renovou')}}"><br>
    @if ($errors-> has('renovou'))
        <span style="color:red">Selecione se renovou ou não (1 ou 0).</span><br><br>
    @endif<br>

    <b>Hora da Requisição: </b><input type="time" name="hora_requisicao" value="{{old('hora_requisicao')}}"><br>
    @if ($errors-> has('hora_requisicao'))
        <span style="color:red">O formato da hora deve ser (HH:MM)</span><br><br>
    @endif<br>

    <b>Hora da Entrega: </b><input type="time" name="hora_entrega" value="{{old('hora_entrega')}}"><br>
    @if ($errors-> has('hora_entrega'))
        <span style="color:red">O formato da hora deve ser (HH:MM)</span><br><br>
    @endif<br>

    <b>ID do material: </b><input type="text" name="id_material" value="{{old('id_material')}}"><br>
    @if ($errors-> has('id_material'))
        <span style="color:red">O ID tem que ser numerico.</span><br><br>
    @endif<br>

    <b>ID do Tipo do Equipamento: </b><input type="text" name="id_tipo_equipamento" value="{{old('id_tipo_equipamento')}}"><br>
    @if ($errors-> has('id_tipo_equipamento'))
        <span style="color:red">O ID tem que ser numerico.</span><br><br>
    @endif<br>

    <b>Id dos Requisitantes: </b><input type="text" name="id_requisitantes" value="{{old('id_tipo_equipamento')}}"><br>
    @if ($errors-> has('id_tipo_equipamento'))
        <span style="color:red">O ID tem que ser numerico.</span><br><br>
    @endif<br>

    <b>Observações: </b><textarea type="text" name="observacoes" value="{{old('observacoes')}}"></textarea><br>
    @if ($errors-> has('observacoes'))
        <span style="color:red">Máximo 255 caracteres.</span><br><br>
    @endif<br>

    <input type="submit" value="Enviar">
</form>
@endsection