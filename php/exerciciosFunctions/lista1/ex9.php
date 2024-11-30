<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha seus esportes</title>
</head>
<body>
    <h1>Escolha suas modalidades favoritas</h1>
    <form action="" method="POST">
        <label for="natacao">Natação</label>
        <input type="checkbox" name="esportes[]" id="natacao" value="Natação">

        <label for="futebol">Futebol</label>
        <input type="checkbox" name="esportes[]" id="futebol" value="Futebol">

        <label for="volei">Vôlei</label>
        <input type="checkbox" name="esportes[]" id="volei" value="Vôlei">

        <label for="basquete">Basquete</label>
        <input type="checkbox" name="esportes[]" id="basquete" value="Basquete">

        <label for="tenis">Tênis</label>
        <input type="checkbox" name="esportes[]" id="tenis" value="Tênis">

        <br><br>
        <input type="submit" value="Enviar">
    </form>


    <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['esportes']) && is_array($_POST['esportes'])) {
                echo '<ul>';
                foreach ($_POST['esportes'] as $esporte) {
                    echo '<li>' . htmlspecialchars($esporte) . '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Nenhum esporte foi selecionado.</p>';
            }
        } else {
            echo '<p>Método de requisição inválido.</p>';
}

    ?>
</body>
</html>
