<?php

require_once 'funcoes.php';
require_once 'db.php';
$departamentos = listarGeral('TBDEPARTAMENTO','DPTDESCRICAO');
$funcionarios = listarGeral('TBFUNCIONARIO','FCNNOME', '*', 'JOIN MERCADO.TBDEPARTAMENTO ON TBFUNCIONARIO.DPTCODIGO = TBDEPARTAMENTO.DPTCODIGO');

if (isset($_POST['cadastrar_funcionario'])){
    $nomeFuncionario = pg_escape_string($_POST['nome_funcionario']);
    $dptCodigo = (int)$_POST['dpt_codigo'];
    $value = "'$nomeFuncionario', $dptCodigo";

    inserirGeral('funcionario.php', 'TBFUNCIONARIO', 'FCNNOME, DPTCODIGO', $value);
}

if (isset($_GET['deletar_funcionario'])){
    $codigo = $_GET['deletar_funcionario'];
    deletarGeral('funcionario.php', 'TBFUNCIONARIO', 'FCNCODIGO', $codigo);
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
                    <th>Código do Departamento</th>
                    <th>Descrição do Departamento</th>
                    <th>Ações</th>
                </tr>

                <?php
                    foreach ($funcionarios as $funcionario){
                        echo '<tr>';
                        echo '<td>' . $funcionario['fcncodigo'] . '</td>';
                        echo '<td>' . $funcionario['fcnnome'] . '</td>';
                        echo '<td>' . $funcionario['dptcodigo'] . '</td>';
                        echo '<td>' . $funcionario['dptdescricao'] . '</td>';
                        echo '<td><a href="?deletar_funcionario=' . $funcionario['fcncodigo'] . '">Deletar</a></td>';
                        echo '</tr>';
                    }
                ?>
            

            </table>

        </fieldset>

        <fieldset>
            <legend>Cadastro de Funcionário:</legend>
            <form method="POST">

                <label for = "nome_funcionario">Nome:</label>
                <input type = "text" name = "nome_funcionario" required>

                <select name = "dpt_codigo">
                    <?php
                        foreach ($departamentos as $departamento){
                            echo '<option value = "' . $departamento['dptcodigo'] . '">' . $departamento['dptdescricao'] . '</option>';
                        }
                    ?>
                </select>

                <input type="submit" name="cadastrar_funcionario" value="Cadastrar">
            </form>
        </fieldset>

    </div>

</body>

</html>