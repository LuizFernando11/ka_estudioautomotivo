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
            Servico aberto dia: {{$servico->created_at}}<br><br>

            <?php
                foreach ($veiculos as $veiculo):
                    if($veiculo->id == $servico->veiculo_id):
            ?>
                Veiculo:<br>
                Tipo: {{$veiculo->tipo}}, Modelo: {{$veiculo->modelo}}, Placa: {{$veiculo->placa}}<br><br>
            <?php
                endif;
                endforeach;
            ?>
            Serviço solicitado: {{$servico->solicitado}}<br>
            Prazo de entrega: {{$servico->entrega}} horas.<br>
            Serviço realizado: {{$servico->realizado}}<br>
            Feito por: {{$servico->feitopor}}<br>
            Observações sobre o serviço: {{$servico->obsfinais}}<br>
            Valor: {{$servico->valor}}<br>
            Desconto: {{$servico->desconto}}<br>
            Valor final: {{$servico->valor - $servico->desconto}}<br>

            <form action="{{route('servicos.destroy', $servico->id)}}" method="post">
                <a class="btn btn-primary" href="{{route('servicos.edit', $servico->id )}}" role="button">Alterar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Deletar</button>
            </form><br><br>
        <?php
           endforeach;
        ?>
    <?php
        else:
    ?>
        <p>Este cliente não tem serviços.</p>
        Crie um novo -> <a class="btn btn-primary" href="{{route('servicos.create')}}" role="button">Novo serviço</a>
    <?php
        endif;
    ?>


</body>
</html>
