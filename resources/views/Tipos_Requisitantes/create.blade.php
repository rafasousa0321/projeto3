@extends('layout')
@section('conteudo')
<form action="{{route('tipos_requisitantes.store')}}" enctype="multipart/form-data" method="post">
    @csrf 

    <b>Tipo: </b><input type="text" name="tipo" value="{{old('tipo')}}"><br>
    @if ($errors-> has('tipo'))
        <span style="color:red">O tipo de ter no máximo 100 caracteres</span><br><br>
    @endif<br>

    <input type="submit" value="Enviar">
</form>
@endsection