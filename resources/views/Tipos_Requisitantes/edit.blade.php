@extends('layout')
@section('conteudo')
<form action="{{route('tipos_requisitantes.update', ['id'=>$tipo_requisitante->id_tipo_requisitante])}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('patch')

    <b>Tipo: </b><input type="text" name="tipo" value="{{$tipo_requisitante->tipo}}"><br>
    @if ($errors-> has('tipo'))
        <span style="color:red">O tipo de ter no máximo 100 caracteres</span><br><br>
    @endif<br>

    <input type="submit" value="Enviar">
</form>
@endsection