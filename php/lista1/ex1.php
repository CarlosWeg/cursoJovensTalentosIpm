<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "valor">Informe o valor:</label>
        <input type = "number" name = "valor" required>

        <input type="submit" value="Enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once 'funcoes_ex1.php';
    $valor = $_POST['valor'];

    echo "Valor Recebido = " . $valor . '<br>';

    impressao($valor);
    }
    
    ?>


</body>


</html>


