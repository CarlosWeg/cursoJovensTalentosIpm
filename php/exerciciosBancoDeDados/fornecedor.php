<?php

require_once 'funcoes.php';
require_once 'db.php';
$cidades = listarGeral('TBCIDADE','CIDNOME');
$fornecedores = listarGeral('TBFORNECEDOR','FORNOME', '*', 'JOIN MERCADO.TBCIDADE ON TBFORNECEDOR.CIDCODIGO = TBCIDADE.CIDCODIGO');

if (isset($_POST['cadastrar_fornecedor'])){
    $nomeFornecedor = pg_escape_string($_POST['nome_fornecedor']);
    $cnpj = pg_escape_string($_POST['cnpj']);
    $cidadeCodigo = (int)$_POST['cid_codigo'];
    $value = "'$nomeFornecedor', '$cnpj', $cidadeCodigo";

    inserirGeral('fornecedor.php', 'TBFORNECEDOR', 'FORNOME, FORCNPJ, CIDCODIGO', $value);
}

if (isset($_GET['deletar_fornecedor'])){
    $codigo = $_GET['deletar_fornecedor'];
    deletarGeral('fornecedor.php', 'TBFORNECEDOR', 'FORCODIGO', $codigo);
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
            <legend>Listagem de clientes:</legend>
            <table>


                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Código da Cidade</th>
                    <th>Nome da Cidade</th>
                    <th>Ações</th>
                </tr>

                <?php
                    foreach ($fornecedores as $fornecedor){
                        echo '<tr>';
                        echo '<td>' . $fornecedor['forcodigo'] . '</td>';
                        echo '<td>' . $fornecedor['fornome'] . '</td>';
                        echo '<td>' . $fornecedor['forcnpj'] . '</td>';
                        echo '<td>' . $fornecedor['cidcodigo'] . '</td>';
                        echo '<td>' . $fornecedor['cidnome'] . '</td>';
                        echo '<td><a href="?deletar_fornecedor=' . $fornecedor['forcodigo'] . '">Deletar</a></td>';
                        echo '</tr>';
                    }
                ?>
            

            </table>

        </fieldset>

        <fieldset>
            <legend>Cadastro de Fornecedor:</legend>
            <form method="POST">

                <label for = "nome_fornecedor">Nome:</label>
                <input type = "text" name = "nome_fornecedor" required>

                <label for = "cnpj">CNPJ:</label>
                <input type = "text" name = "cnpj" required>

                <select name = "cid_codigo">
                    <?php
                        foreach ($cidades as $cidade){
                            echo '<option value = "' . $cidade['cidcodigo'] . '">' . $cidade['cidnome'] . '</option>';
                        }
                    ?>
                </select>

                <input type="submit" name="cadastrar_fornecedor" value="Cadastrar">
            </form>
        </fieldset>

    </div>

</body>

</html>