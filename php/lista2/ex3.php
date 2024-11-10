<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>

<body>

    <form action = "" method = "POST">


        <label for = "nomeString">Informe os nomes separados por vírgula:</label>
        <input type = "text" name = "nomeString">

	    <input type = "submit" value = "Enviar">

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex3.php';
            $vetor = explode(",",$_POST['nomeString']);

            imprimirVetorOrdenado($vetor);

        }

    ?>

</body>


</html>