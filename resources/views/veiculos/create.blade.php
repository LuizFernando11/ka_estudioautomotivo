<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Veiculo</title>
</head>
<body>
    <h3>Veiculo de {{$cliente->nome}}</h3>
    <form action="{{route('veiculos.store')}}" method="post">
        @csrf
        <input  type="submit" value="Cadastrar">
    </form>
</body>
</html>