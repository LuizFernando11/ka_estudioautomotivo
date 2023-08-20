<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente</title>
</head>
<body>
    <form action="{{route('clientes.store')}}" method="post">
        @csrf
    
        Nome: <input type="text" name="nome"><br><br>
        CPF: <input type="text" name="cpf"><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        Endereco: <input type="text" name="endereco"><br><br>
        Cidade: <input type="text" name="cidade"><br><br>
        Estado: <input type="text" name="estado"><br><br>

        <input  type="submit" value="Cadastrar">
    </form>
</body>
</html>