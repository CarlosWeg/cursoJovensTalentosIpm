<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>

<body>

    <form action = "" method = "POST">


        <label for = "numeroString">Informe os números separados por vírgula:</label>
        <input type = "text" name = "numeroString">

	    <input type = "submit" value = "Enviar">

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once 'funcoes_ex13.php';
            $vetor = explode(",",$_POST['numeroString']);

            converterVetorCubo($vetor);
            imprimirVetor($vetor);

        }

    ?>

</body>


</html>