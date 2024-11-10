<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>

<body>

    <form action = "" method = "POST">

	

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex5.php';

            $tamanho= rand(10,14);
 
            $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_!@#+-';
            
            $senha = '';
            for ($i = 0; $i < $tamanho; $i++) {
                $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
            }

            str_shuffle($senha);
            
            echo 'Senha gerada: ' . $senha;
            
        }

            
    ?>

            


    ?>


</body>


</html>