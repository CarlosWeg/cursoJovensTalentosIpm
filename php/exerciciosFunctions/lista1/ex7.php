<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "peso">Informe o peso:</label>
        <input type = "number" name = "peso" required>

        <label for = "altura">Informe a altura:</label>
        <input type ="number" name = "altura" step = "0.01" required>


        <input type ="submit" value = "Enviar">

    </form>


    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex7.php';

            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            echo "O IMC do indivíduo é: " . calcImc($peso,$altura) . "<br>";
            escreverSaudabilidade(calcImc($peso,$altura));
        }

    ?>


</body>


</html>