<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>


<body>

    <form action ="" method = "POST">

        <label for = "texto">Digite um texto:</label>
        <input type="text" name="texto" required><br>

        <label for = "caractere">Digite o caractere:</label>
        <input type = "text" name = "caractere" required>

        <input type="submit" value="Enviar">

    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require_once 'funcoes_ex4.php';

            $texto = $_POST['texto'];
            $caractere = $_POST['caractere'];   

            echo 'O caractere "' . $caractere . '" aparece ' . contCaractere($texto,$caractere) . ' vez(es) no texto.';
        }

    ?>



</body>


</html>