<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "nota1">Nota 1:</label>
        <input type = "number" name = "nota1" required>

        <label for = "nota1">Nota 2:</label>
        <input type = "number" name = "nota2" required>

        <label for = "nota1">Nota 3:</label>
        <input type = "number" name = "nota3" required>

        <label for = "nota1">Nota 4:</label>
        <input type = "number" name = "nota4" required>

        <input type = "submit" name = "Enviar!">

    </form>


    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex5.php';

            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            echo "Resultado da aprovação: " . imprimirAprovacao(calcMedia($nota1,$nota2,$nota3,$nota4));

        }

    ?>



</body>


</html>

        