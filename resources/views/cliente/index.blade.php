<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>

<table border=1 align="center">
    <p>Clientes:</p>
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
            <td><a href="">Visualizar</a></td>
            <td><a href="">Servicos</a></td>
        </tr>
        <?php
            endforeach;
        ?>
    </tbody>
</table>

</body>
</html>
