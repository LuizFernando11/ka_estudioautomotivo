<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <h1>Cliente:</h1>
    ID: {{$cliente->id}}<br>
    Nome: {{$cliente->nome}}<br>
    CPF: {{$cliente->cpf}}<br>
    Telefone: {{$cliente->telefone}}<br>
    Endereco: {{$cliente->endereco}}<br>
    Cidade: {{$cliente->cidade}}<br>
    Estado: {{$cliente->estado}}<br><br>

    <a href="{{route('veiculos.novo', $cliente->id)}}">Novo Veiculo</a> - <a href="">Novo Servicos</a><br><br>
    <a href="{{route('clientes.edit', $cliente->id )}}">Alterar</a><br>
    
    <form action="{{route('clientes.destroy', $cliente)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>

</body>
</html>