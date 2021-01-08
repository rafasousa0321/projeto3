<form action="{{route('requisitantes.store')}}" enctype="multipart/form-data" method="post">
    @csrf 

    <b>Nome: </b><input type="text" name="nome" value="{{old('nome')}}"><br>
    @if ($errors-> has('nome'))
        <span style="color:red">O nome deve ter no máximo 100 caracteres.</span><br><br>
    @endif<br>

    <b>Telefone: </b><input type="text" name="telefone" value="{{old('telefone')}}"><br>
    @if ($errors-> has('telefone'))
        <span style="color:red">O telefone deve ter exatamente 9 caracteres.</span><br><br>
    @endif<br>

    <b>Email: </b><input type="text" name="email" value="{{old('email')}}"><br>
    @if ($errors-> has('email'))
        <span style="color:red">O email deve ter exatamente 9 caracteres.</span><br><br>
    @endif<br>

    <b>Localidade: </b><input type="text" name="localidade" value="{{old('localidade')}}"><br>
    @if ($errors-> has('localidade'))
        <span style="color:red">A localidade deve ter no máximo 100 caracteres.</span><br><br>
    @endif<br>

    <b>Cartão de Cidadão: </b><input type="text" name="cartao_cidadao" value="{{old('cartao_cidadao')}}"><br>
    @if ($errors-> has('cartao_cidadao'))
        <span style="color:red">o cartao_cidadao deve ter no máximo 8 caracteres.</span><br><br>
    @endif<br>

    <b>Id do Tipo de Requisitante: </b><input type="text" name="id_tipo_requisitante" value="{{old('id_tipo_requisitante')}}"><br>
    @if ($errors-> has('id_tipo_requisitante'))
        <span style="color:red">o Idt do Tipo de Requisitante deve ser numerico.</span><br><br>
    @endif<br>
</form>