<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>


<body>

    <form action ="" method = "POST">

        <label for = "texto">Escreva o Texto:</label>
        <input type = "text" name = "texto" required>

        <label for = "caractere">Escreva o Caractere:</label>
        <input type = "text" name = "caractere" required>

        <input type = "submit" value = "Enviar!">

    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex4.php';
            $caractere = $_POST['caractere'];
            $texto = $_POST['texto'];

            ocoCaractere($texto,$caractere);
        }

    ?>

</body>


</html>