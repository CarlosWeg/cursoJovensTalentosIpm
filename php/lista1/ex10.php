<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>

<body>

    <form action = "" method = "POST">


        <label for = "menor18">Menor de 18 anos</label>
        <input type = "radio" name = "idade" value = "menor18">
        <br>

        <label for = "acima18abaixo35">Acima de 18 e abaixo de 35</label>
        <input type = "radio" name = "idade" value = "acima18abaixo35">
        <br>

        <label for = "acima35abaixo65">Acima de 35 e abaixo de 65</label>
        <input type = "radio" name = "idade" value = "acima35abaixo65">
        <br>

        <label for = "acima65">Acima 65</label>
        <input type = "radio" name = "idade" value = "acima65">
        <br>

        <input type = "submit" value = "Enviar">

    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex10.php';

            $escolha = $_POST['idade'];

            echo 'Faixa etária selecionada: ' . identificarFaixa($escolha);

        }

    ?>


</body>


</html>