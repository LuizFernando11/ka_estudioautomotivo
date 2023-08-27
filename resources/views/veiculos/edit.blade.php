<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Veiculo</title>
</head>
<body>
    <form action="{{route('veiculos.update', $veiculo )}}" method="post">
        @csrf
        @method('PUT')
        tipo: <input type="text" name="tipo" value="{{$veiculo->tipo}}"><br><br>
        modelo: <input type="text" name="modelo" value="{{$veiculo->modelo}}"><br><br>
        placa: <input type="text" name="placa" value="{{$veiculo->placa}}"><br><br>

        <input  type="submit" value="Salvar">
    </form>
</body>
</html>