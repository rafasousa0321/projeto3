@extends('layout')
@section('conteudo')
<form action="{{route('tipos_equipamentos.store')}}" enctype="multipart/form-data" method="post">
    @csrf 

    <b>Descrição: </b><input type="text" name="descricao" value="{{old('descricao')}}"><br>
    @if ($errors-> has('descricao'))
        <span style="color:red">A descricao de ter no máximo 100 caracteres</span><br><br>
    @endif<br>

    <input type="submit" value="Enviar">
</form>
@endsection