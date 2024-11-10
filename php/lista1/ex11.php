<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>

<body>

    <form action = "" method = "POST">


        <label for="qntd">Selecione a quantidade:</label>
        <select name = "qntd" required>
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
            <option value = "4">4</option>
            <option value = "5">5</option>
            <option value = "6">6</option>
            <option value = "7">7</option>
            <option value = "8">8</option>
            <option value = "9">9</option>
            <option value = "10">10</option>
        </select>

	

	<input type = "submit" value = "Enviar">

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex11.php';

            $quantidade = $_POST['qntd'];

            exibirImagem($quantidade);

        }

    ?>

</body>

</html>