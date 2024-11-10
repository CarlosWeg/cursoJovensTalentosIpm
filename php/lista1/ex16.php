<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "nome">Informe o nome:</label>
        <input type = "text" name = "nome" required>
        <br>

        <label for = "dataNascimento">Informe a data de nascimento:</label>
        <input type = "date" name = "dataNascimento" required>
        <br>

        <label for = "salario">Informe o salário:</label>
        <input type = "numer" name = "salario" step = "0.01" required>
        <br>

        <label for = "aluguel">Informe o Aluguel:</label>
        <input type = "numer" name = "aluguel" step = "0.01" required>
        <br>
	
	<input type = "submit" value = "Enviar">

    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex16.php';
            $nome = $_POST['nome'];
            $dataNascimento = $_POST['dataNascimento'];
            $salario = $_POST['salario'];
            $aluguel = $_POST['aluguel'];
            define('horas', '200');

            imprimirInformacoes($nome,$dataNascimento,$salario,$aluguel);

        }

    ?>


</body>


</html>