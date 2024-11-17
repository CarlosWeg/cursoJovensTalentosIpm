<?php

require_once 'funcoes.php';
require_once 'db.php';
$categorias = listarGeral('TBCATEGORIA','CATDESCRICAO');

if (isset($_POST['cadastrar_categoria'])){
    $nomeCategoria = pg_escape_string($_POST['nome_categoria']);
    $value = "'$nomeCategoria'";
    inserirGeral('categoria.php','TBCATEGORIA', 'CATDESCRICAO', $value);
}

if (isset($_GET['deletar_categoria'])){
    $codigo = $_GET['deletar_categoria'];
    deletarGeral('categoria.php', 'TBCATEGORIA', 'CATCODIGO', $codigo);
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
            <legend>Listagem de categorias:</legend>
            <table>

                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>

                <?php
                    foreach ($categorias as $categoria){
                        echo '<tr>';
                        echo '<td>' . $categoria['catcodigo'] . '</td>';
                        echo '<td>' . $categoria['catdescricao'] . '</td>';
                        echo '<td><a href="?deletar_categoria=' . $categoria['catcodigo'] . '">Deletar</a></td>';
                        echo '</tr>';
                    }
                ?>
            

            </table>

        </fieldset>

        <fieldset>
            <legend>Cadastro de Categoria:</legend>
            <form method="POST">

                <label for = "nome_categoria">Nome:</label>
                <input type = "text" name = "nome_categoria" required>

                <input type="submit" name="cadastrar_categoria" value="Cadastrar">
            </form>
        </fieldset>

    </div>

</body>

</html>