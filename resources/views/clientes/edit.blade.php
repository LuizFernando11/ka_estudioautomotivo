<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cliente</title>
</head>
<body>
    <form action="{{route('clientes.update', $cliente )}}" method="post">
        @csrf
        @method('PUT')
        Nome: <input type="text" name="nome" value="{{$cliente->nome}}"><br><br>
        CPF: <input type="text" name="cpf" value="{{$cliente->cpf}}"><br><br>
        Telefone: <input type="text" name="telefone" value="{{$cliente->telefone}}"><br><br>
        Endereco: <input type="text" name="endereco" value="{{$cliente->endereco}}"><br><br>
        Cidade: <input type="text" name="cidade" value="{{$cliente->cidade}}"><br><br>
        Estado: <input type="text" name="estado" value="{{$cliente->estado}}"><br><br>

        <input  type="submit" value="Salvar">
    </form>
</body>
</html>