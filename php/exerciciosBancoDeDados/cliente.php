<?php
require_once 'funcoes.php';
require_once 'db.php';
$clientes = obterClientes();
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
        <legend>Listagem de clientes:</legend>
        <table>

            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cidade - Código</th>
            <th>Ações</th>

            <?php listarClientes($clientes)?>  

        </table>

    </fieldset>

    <fieldset>
        <legend>Cadastro de Cliente:</legend>
        <form action="funcoes.php" method="POST">

            <label for = "nome_cliente">Nome:</label>
            <input type = "text" name = "nome_cliente" required>
            <label for = "cpf">CPF:</label>
            <input type = "text" name = "cpf" required>
            <select name = "selecionar_cidade">
            <?php listarCidadesSelect($cidades) ?>
                
            </select>

            <input type="submit" name="cadastrar_cliente" value="Cadastrar">
        </form>
    </fieldset>


</body>

</html>