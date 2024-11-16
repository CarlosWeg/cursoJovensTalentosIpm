<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>

    <form action = "" method = "POST">


        <label for = "valor">Informe o valor:</label>
        <input type = "number" name = "valor" required>

	

	<input type = "submit" value = "Enviar">

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex2.php';
            $valor = $_POST['valor'];
            echo 'Mês correspondente: ' . verificarMes($valor);
            

        }

    ?>


</body>


</html>