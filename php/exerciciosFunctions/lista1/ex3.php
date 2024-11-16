<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "texto">Insira a string:</label>
        <input type = "text" name = "palavra" required>

        <input type = "submit" value = "Enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        require_once 'funcoes_ex3.php';
        $palavra = $_POST['palavra'];

        echo 'Número de caracteres = ' . contarCaracteres($palavra);
    }

    ?>


</body>


</html>