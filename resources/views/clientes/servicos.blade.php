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
            <?php
                foreach ($veiculos as $veiculo):
                    if($veiculo->id == $servico->veiculo_id):
            ?>
                <table id="TabelaExibirVeiculoServicos" border=1 align="center">
                    <h3>Veiculo</h3>
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Modelo</th>
                            <th>Placa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$veiculo->tipo}}</td>
                            <td>{{$veiculo->modelo}}</td>
                            <td>{{$veiculo->placa}}</td>
                        </tr>
                    </tbody>
                </table>
            <?php
                endif;
                endforeach;
            ?>

            <table id="TabelaExibirServicos" border=1 align="center">
                <h3>Serviço</h3>
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Serviço solicitado</th>
                        <th>Prazo de entrega</th>
                        <th>Serviço realizado</th>
                        <th>Feito por</th>
                        <th>Observações sobre o serviço</th>
                        <th>Valor:</th>
                        <th>Desconto</th>
                        <th>Valor final</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$servico->created_at}}</td>
                        <td>{{$servico->solicitado}}</td>
                        <td>{{$servico->entrega}}</td>
                        <td>{{$servico->realizado}}</td>
                        <td>{{$servico->feitopor}}</td>
                        <td>{{$servico->obsfinais}}</td>
                        <td>{{$servico->valor}}</td>
                        <td>{{$servico->desconto}}</td>
                        <td>{{$servico->valor - $servico->desconto}}</td>
                        <td><a class="btn btn-primary" href="{{route('servicos.edit', $servico->id )}}" role="button">X</a></td>
                        <td><form action="{{route('servicos.destroy', $servico->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">X</button>
                        </form></td>
                    </tr>
                </tbody>
            </table>

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

