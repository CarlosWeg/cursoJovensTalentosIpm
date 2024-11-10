<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>

<body>

    <form action = "" method = "POST">

        <label for = "palavras">Insira o texto / palavras:</label>
        <br>
        <textarea name = "palavras"></textarea>
        <br>

	    <input type = "submit" value = "Enviar">

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex6.php';
            $palavras = $_POST['palavras'];

            echo 'Quantidade de palavras: ' . contPalavras($palavras);
        }

    ?>


</body>


</html>