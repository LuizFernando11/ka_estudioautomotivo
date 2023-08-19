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

    <a href="">Novo Veiculo</a> - <a href="">Novo Servicos</a><br>
    <a href="">Alterar</a> - <a href="">Excluir</a>

</body>
</html>