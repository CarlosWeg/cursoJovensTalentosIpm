<?php
require_once 'funcoes.php';
require_once 'db.php';
$cidades = obterCidades();

?>

<!DOCTYPE HTML>
<html lang = "pt-br">

<head>

    <meta charset= "UTF-8">
    <title>Exercício PHP e Banco de dados</title>
    <link rel="stylesheet" href="style.css">    

</head>

<body>

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
            <th>Código</th>
            <th>Descrição</th>
            <th>Ações</th>

            <?php listarCidades($cidades)?>  

        </table>

    </fieldset>

    <fieldset>
        <legend>Cadastro de Cidade:</legend>
        <form action="funcoes.php" method="POST">

            <label for = "nome_cidade">Nome:</label>
            <input type = "text" name = "nome_cidade" required>

            <input type="submit" name="cadastrar_cidade" value="Cadastrar">
        </form>
    </fieldset>

</body>

</html>