<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "unidade">Informe as unidades:</label>
        <input type = "number" name = "unidade">


	<input type = "submit" value = "Enviar">

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex1.php';
            $unidade = $_POST['unidade'];

            echo "Valor em reais da sua conta de luz: " . calcularConta($unidade);
        }
    ?>

</body>

</html>