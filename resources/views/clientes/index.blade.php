<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>

<h1>Clientes:</h1>

<table id="TabelaClientes" border=1 align="center">
    <h3><a href="{{route('clientes.create')}}">Criar novo</a></h3>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Visualizar</th>
            <th>Serviços</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($clientes as $cl):
        ?>
        <tr>
            <td><?= $cl->nome ?></td>
            <td><?= $cl->telefone ?></td>
            <td><a href="{{route('clientes.show', $cl->id )}}">Visualizar</a></td>
            <td><a href="{{route('clientes.servicos', $cl->id )}}">Servicos</a></td>
        </tr>
        <?php
            endforeach;
        ?>
    </tbody>
</table>

</body>

</html>
