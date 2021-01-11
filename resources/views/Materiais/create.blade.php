<form action="{{route('materiais.store')}}" enctype="multipart/form-data" method="post">
    @csrf 

    <b>Id do Tipo do Equipamento: </b><input type="text" name="id_tipo_equipamento" value="{{old('id_tipo_equipamento')}}"><br>
    @if ($errors-> has('id_tipo_equipamento'))
        <span style="color:red">O ID tem que ser numerico.</span><br><br>
    @endif<br>

    <b>Designação: </b><textarea type="text" name="designacao" value="{{old('designacao')}}"></textarea><br>
    @if ($errors-> has('designacao'))
        <span style="color:red">A descrição deve ter no máximo 100 caracteres.</span><br><br>
    @endif<br>

    <b>Codigo Interno: </b><input type="text" name="codigo_interno" value="{{old('codigo_interno')}}"><br>
    @if ($errors-> has('codigo_interno'))
        <span style="color:red">O codigo_interno tem que ser numerico.</span><br><br>
    @endif<br>

    <b>Observações: </b><textarea type="text" name="observacoes" value="{{old('observacoes')}}"></textarea><br>
    @if ($errors-> has('observacoes'))
        <span style="color:red">As observacoes deves ter no máximo 100 caracteres.</span><br><br>
    @endif<br>

    <input type="submit" value="Enviar">
</form>