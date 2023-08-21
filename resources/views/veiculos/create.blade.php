<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Veiculo</title>
</head>
<body>
    <h3>Veiculo de {{$cliente->nome}} - {{ $cliente->id }}</h3>
    <form action="{{ route('veiculos.store') }}" method="post">
        @csrf
        <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">

        tipo: <input type="text" name="tipo"><br><br>
        modelo: <input type="text" name="modelo"><br><br>
        placa: <input type="text" name="placa"><br><br>

        <button type="submit">Criar Veículo</button>
    </form>
</body>
</html>
