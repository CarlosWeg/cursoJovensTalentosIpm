<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "lado1">Informe um lado:</label>
        <input type = "number" name = "lado1" required>

        <label for = "lado2">Informe o outro lado:</label>
        <input type = "number" name = "lado2" required>

        <input type = "submit" value="Enviar">
    
    </form>

    
    <?php
    
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex6.php';

            $lado1 = $_POST['lado1'];
            $lado2 = $_POST['lado2'];

            echo "Área = " . calcArea($lado1, num2: $lado2) . "<br>";
            echo "Perímetro = " . calcPerimetro($lado1,$lado2);

        }


    ?>


</body>