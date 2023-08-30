<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Servico</title>
</head>
<body>

    <form action="{{route('servicos.store')}}" method="post">
        @csrf

        Cliente:
            <select name="cliente_id" id="cliente_id">
                <option value="">Selecione um cliente</option>
                <?php
                    foreach ($clientes as $cliente):
                ?>
                    <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                <?php
                    endforeach;
                ?>
            </select>
        <br><br>
        Veiculo:
            <select name="veiculo_id" id="veiculo_id">
                <option value="">Selecione um veículo</option>
            </select>
        <br><br>
        Previsao de entrega (em horas): <input type="number" name="entrega"><br><br>
        servico solicitado: <input type="text" name="solicitado"><br><br>
        servico prestado: <input type="text" name="realizado"><br><br>
        observacao do servico: <input type="text" name="obsfinais"><br><br>
        feito por: <input type="text" name="feitopor"><br><br>
        valor: <input type="number" name="valor"><br><br>
        desconto: <input type="number" name="desconto"><br><br>

        <input  type="submit" value="Cadastrar">
    </form>

    <script>
        document.getElementById('cliente_id').addEventListener('change', function() {
            var selectedClientId = this.value;
            //console.log('Selected client ID:', selectedClientId);
            var veiculosSelect = document.getElementById('veiculo_id');

            // Limpa as opções atuais do select de veículos
            veiculosSelect.innerHTML = '';

            // Faz uma solicitação AJAX para buscar os veículos do cliente selecionado
            fetch('/buscar-veiculos/' + selectedClientId)
                .then(response => response.json())
                .then(data => {
                    data.forEach(veiculo => {
                        var option = document.createElement('option');
                        option.value = veiculo.id;
                        option.textContent = veiculo.modelo;
                        veiculosSelect.appendChild(option);
                    });
                });
        });
    </script>


</body>
</html>
