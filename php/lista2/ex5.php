<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>

<body>


    <form method="post">

            <input type="submit" value="Gerar Senha">

    </form>


    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'funcoes_ex5.php';
            $senha = gerarSenha();
            echo "Senha gerada: $senha";
        }
          
    ?>


</body>


</html>