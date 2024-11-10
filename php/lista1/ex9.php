<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>

<body>

    <form action = "" method = "POST">


        <h3>Selecione as modalidades:</h3>

        <label for = "natacao">Natação</label>
        <input type ="checkbox" name = "natacao">
        <br>

        <label for = "futebol">Futebol</label>
        <input type ="checkbox" name = "futebol">
        <br>

        <label for = "volei">Vôlei</label>
        <input type ="checkbox" name = "volei">
        <br>

        <input type ="submit" value = "Enviar">


    </form>


    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){

            if (isset($_POST['natacao'])){
                echo 'Modalidade natação selecionada.<br>';
            }

            if (isset($_POST['futebol'])){
                echo 'Modalidade futebol selecionada.<br>';
            }

            if (isset($_POST['volei'])){
                echo 'Modalidade volei selecionada.<br>';
            }
            

        }

    ?>

</body>

</html>