<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>


    <form action = "" method = "POST">

        <label for = valor1> Informe o valor 1:</label>
        <input type = "number" name = "valor1" required>

        <label for = "valor2">Infor o valor 2:</label>
        <input type = "number" name = "valor2" required>

        <input type = "submit" value = "Enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once 'funcoes_ex2.php';

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    imprimirIntermediarios($valor1,$valor2);

    }

?>

</body>




</html>