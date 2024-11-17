<?php

require_once 'funcoes.php';
require_once 'db.php';
$cidades = listarGeral('TBCIDADE','CIDNOME');

if (isset($_POST['cadastrar_cidade'])){
    $nomeCidade = pg_escape_string($_POST['nome_cidade']);
    $value = "'$nomeCidade'";
    inserirGeral('cidade.php','TBCIDADE', 'CIDNOME', $value);
}

if (isset($_GET['deletar_cidade'])){
    $codigo = $_GET['deletar_cidade'];
    deletarGeral('cidade.php', 'TBCIDADE', 'CIDCODIGO', $codigo);
}

?>

<!DOCTYPE HTML>
<html lang = "pt-br">

<head>

    <meta charset= "UTF-8">
    <title>Exercício PHP e Banco de dados</title>
    <link rel="stylesheet" href="style.css">    

</head>

<body>

    <div class = "container-principal">

        <nav>
            <a href= "categoria.php">Categoria</a>
            <a href= "departamento.php">Departamento</a>
            <a href= "cidade.php">Cidade</a>
            <a href= "cliente.php">Cliente</a>
            <a href= "fornecedor.php">Fornecedor</a>
            <a href= "funcionario.php">Funcionário</a>
            <a href= "produto.php">Produto</a>
        </nav>

        <fieldset>
            <legend>Listagem de cidades:</legend>
            <table>


                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>

                <?php
                    foreach ($cidades as $cidade){
                        echo '<tr>';
                        echo '<td>' . $cidade['cidcodigo'] . '</td>';
                        echo '<td>' . $cidade['cidnome'] . '</td>';
                        echo '<td><a href="?deletar_cidade=' . $cidade['cidcodigo'] . '">Deletar</a></td>';
                        echo '</tr>';
                    }
                ?>
            

            </table>

        </fieldset>

        <fieldset>
            <legend>Cadastro de Cidade:</legend>
            <form method="POST">

                <label for = "nome_cidade">Nome:</label>
                <input type = "text" name = "nome_cidade" required>

                <input type="submit" name="cadastrar_cidade" value="Cadastrar">
            </form>
        </fieldset>

    </div>

</body>

</html>