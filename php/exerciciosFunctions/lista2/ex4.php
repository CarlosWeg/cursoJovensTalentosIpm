<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "palpite">Informe o seu número da sorte!</label>
        <input type = "number" name = "palpite">

	<input type = "submit" value = "Enviar">

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex4.php';
            define ('premio','BOI GORDO');
            define ('min',1);
            define ('max',100); 

            $numAleatorio = rand(min,max);
            $palpite = $_POST['palpite'];

            if (verificarPalpite($numAleatorio,$palpite)){
                echo 'GANHOU! Foi sorteado (' . $numAleatorio . ')  - VOCÊ GANHOU UM ' . premio;
            } else{
                echo 'Você perdeu! Foi sorteado o número (' . $numAleatorio . '), e você escolheu o número (' . $palpite . ')';
            }

        }

    ?>


</body>


</html>