<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "nome">Informe o nome:</label>
        <input type = "text" name = "nome" required>

        <label for = "senha">Informe a senha:</label>
        <input type ="password" name = "senha" required>

        <input type = "submit" value = "Enviar">



    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex8.php';
            
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];

            if (verificarSenha($senha) && verificarNome($nome)){
                echo 'Autenticação realizada com sucesso';
            } else{
                echo 'Você não tem permissão de visualizar essa página';
            }
        }

    ?>

</body>


</html>