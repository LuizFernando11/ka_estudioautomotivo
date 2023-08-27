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

        Cliente: <br><br>
        Veiculo: <br><br>
        Previsao de entrega (em horas): <input type="number" name="entrega"><br><br>
        servico solicitado: <input type="text" name="solicitado"><br><br>
        servico prestado: <input type="text" name="realizado"><br><br>
        observacao do servico: <input type="text" name="obsfinais"><br><br>
        feito por: <input type="text" name="feitopor"><br><br>
        valor: <input type="number" name="valor"><br><br>
        desconto: <input type="number" name="desconto"><br><br>

        <input  type="submit" value="Cadastrar">
    </form>
</body>
</html>
