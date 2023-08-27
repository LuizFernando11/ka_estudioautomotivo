<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    Estado: {{$cliente->estado}}<br>
    <form action="{{route('clientes.destroy', $cliente)}}" method="post">
        <a class="btn btn-primary" href="{{route('clientes.edit', $cliente->id )}}" role="button">Alterar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Deletar</button>
        <a class="btn btn-primary" href="{{route('veiculos.novo', $cliente->id)}}" role="button">Novo Veiculo</a><br><br>
    </form>

    <p>Quantidade de veiculos: {{$cliente->veiculos->count()}}</p><br>

    <?php
        if($cliente->veiculos->count() > 0):
    ?>
        <?php
            foreach($cliente->veiculos as $veiculo):
        ?>
                Tipo: {{$veiculo->tipo}}<br>
                Modelo: {{$veiculo->modelo}}<br>
                Placa: {{$veiculo->placa}}<br>
                <form action="{{route('veiculos.destroy', $veiculo->id)}}" method="post">
                    <a class="btn btn-primary" href="{{route('veiculos.edit', $veiculo->id )}}" role="button">Alterar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Deletar</button>
                </form><br><br>
        <?php
            endforeach;
        ?>
    <?php 
        endif;
    ?>

</body>
</html>