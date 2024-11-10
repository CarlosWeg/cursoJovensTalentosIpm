<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "raio">Informe o raio</label>
        <input type = "number" name = "raio" required>

	

	<input type = "submit" value = "Enviar">

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex12.php';

            $raio = $_POST['raio'];
            $pi =  3.14159;

            echo 'A área deste círculo é: ' . calcArea($raio,$pi);

        }

    ?>


</body>


</html>