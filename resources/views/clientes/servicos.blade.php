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
    Nome: {{$cliente->nome}}<br>

    <p>Quantidade de servicos: {{$cliente->servicos->count()}}</p><br>

    <?php
        if($cliente->servicos->count() > 0):
    ?>
        <?php
            foreach($servicos as $servico):
        ?>
                Tipo: $servico->tipo<br>
                Modelo: $servico->modelo<br>
                Placa: $servico->placa<br>
                <form action="{{route('servico.destroy', $servico->id)}}" method="post">
                    <a class="btn btn-primary" href="{{route('servico.edit', $servico->id )}}" role="button">Alterar</a>
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
