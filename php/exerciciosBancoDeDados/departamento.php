<?php

require_once 'funcoes.php';
require_once 'db.php';
$departamentos = listarGeral('TBDEPARTAMENTO','DPTDESCRICAO');

if (isset($_POST['cadastrar_departamento'])){
    $nomeDepartamento = pg_escape_string($_POST['nome_departamento']);
    $value = "'$nomeDepartamento'";
    inserirGeral('departamento.php','TBDEPARTAMENTO', 'DPTDESCRICAO', $value);
}

if (isset($_GET['deletar_departamento'])){
    $codigo = $_GET['deletar_departamento'];
    deletarGeral('departamento.php', 'TBDEPARTAMENTO', 'DPTCODIGO', $codigo);
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
            <legend>Listagem de departamentos:</legend>
            <table>


                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>

                <?php
                    foreach ($departamentos as $departamento){
                        echo '<tr>';
                        echo '<td>' . $departamento['dptcodigo'] . '</td>';
                        echo '<td>' . $departamento['dptdescricao'] . '</td>';
                        echo '<td><a href="?deletar_departamento=' . $departamento['dptcodigo'] . '">Deletar</a></td>';
                        echo '</tr>';
                    }
                ?>
            

            </table>

        </fieldset>

        <fieldset>
            <legend>Cadastro de Departamento:</legend>
            <form method="POST">

                <label for = "nome_departamento">Nome:</label>
                <input type = "text" name = "nome_departamento" required>

                <input type="submit" name="cadastrar_departamento" value="Cadastrar">
            </form>
        </fieldset>

    </div>

</body>

</html>