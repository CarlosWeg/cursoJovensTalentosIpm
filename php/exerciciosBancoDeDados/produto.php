<?php

require_once 'funcoes.php';
require_once 'db.php';

$produtos = listarGeral('TBPRODUTO','PRONOME', '*', 'JOIN MERCADO.TBCATEGORIA ON MERCADO.TBPRODUTO.CATCODIGO = TBCATEGORIA.CATCODIGO JOIN MERCADO.TBFORNECEDOR ON MERCADO.TBFORNECEDOR.FORCODIGO = TBFORNECEDOR.FORCODIGO');
$categorias = listarGeral('TBCATEGORIA','CATDESCRICAO');
$fornecedores = listarGeral('TBFORNECEDOR','FORNOME');

if (isset($_GET['deletar_produto'])) {
    $codigo = $_GET['deletar_produto'];
    deletarGeral('produto.php', 'TBPRODUTO', 'PROCODIGO', $codigo);
}

if (isset($_POST['cadastrar_produto'])){
    $nomeProduto = pg_escape_string($_POST['nome_produto']);
    $descricaoProduto = pg_escape_string($_POST['descricao_produto']);
    $valorProduto = $_POST['valor_produto'];
    $estoqueProduto = (int)$_POST['valor_produto'];
    $categoriaCodigo = (int)$_POST['categoria_codigo'];
    $fornecedorCodigo = (int)$_POST['fornecedor_codigo'];

    $value = "'$nomeProduto', '$descricaoProduto', $valorProduto, $estoqueProduto, $categoriaCodigo, $fornecedorCodigo";

    inserirGeral('produto.php','TBPRODUTO', 'pronome,prodescricao,provalor,proestoque,catcodigo,forcodigo', $value);
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
        <legend>Listagem de produtos:</legend>

            <table>

                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Estoque</th>
                    <th>Código da categoria</th>
                    <th>Descrição da categoria</th>
                    <th>Código do fornecedor</th>
                    <th>Nome do fornecedor</th>
                    <th>Ações</th>
                    
                </tr>

                <?php

                    foreach ($produtos as $produto){
                        echo '<tr>';
                        echo '<td>' . $produto['procodigo'] . '</td>';
                        echo '<td>' . $produto['pronome'] . '</td>';
                        echo '<td>' . $produto['prodescricao'] . '</td>';
                        echo '<td>' . $produto['provalor'] . '</td>';
                        echo '<td>' . $produto['proestoque'] . '</td>';
                        echo '<td>' . $produto['catcodigo'] . '</td>';
                        echo '<td>' . $produto['catdescricao'] . '</td>';
                        echo '<td>' . $produto['forcodigo'] . '</td>';
                        echo '<td>' . $produto['fornome'] . '</td>';
                        echo '<td><a href="?deletar_produto=' . $produto['procodigo'] . '">Deletar</a></td>';
                        echo '</tr>';
                    }

                ?>

        </table>

        </fieldset>

        <fieldset> 
        <legend>Cadastro de produtos:</legend>

            <form method = "POST">

                <label for = "nome_produto">Nome do produto:</label>
                <input type = "text" name = "nome_produto" max = "25" required>

                <label for = "descricao_produto">Descrição do produto:</label>
                <input type = "text" name = "descricao_produto" max = "100" required>
                <br>
                <label for = "valor_produto">Valor do produto:</label>
                <input type = "number" name = "valor_produto" step = "0.01" required>

                <label for = "estoque_produto">Estoque do produto:</label>
                <input type = "number" name = "estoque_produto" required>

                <p>Selecione a categoria do produto:</p>

                <select name = "categoria_codigo">
                    <?php
                        foreach ($categorias as $categoria){
                         echo '<option value = "' . $categoria['catcodigo'] . '">' . $categoria['catdescricao'] .'</option>';
                        }
                    ?>
                </select>

                <p>Selecione o fornecedor do produto:</p>

                <select name = "fornecedor_codigo">
                    <?php
                        foreach ($fornecedores as $fornecedor){
                        echo '<option value = "' . $fornecedor['forcodigo'] . '">' . $fornecedor['fornome'] .'</option>';
                        }
                    ?>
                </select>

                <br>
                <input type = "submit" name="cadastrar_produto" value = "Cadastrar">

                </form>

        </fieldset>

    </div>

</body>

</html>