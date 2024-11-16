<?php

    require_once 'db.php';

//PÁGINA CIDADES

    function obterCidades(){
        $conexao = conectarBD();
        $query = "SELECT CIDCODIGO, CIDNOME
                    FROM MERCADO.TBCIDADE";

        $resultado = pg_query($conexao,$query);
        return pg_fetch_all($resultado);
    }

    function listarCidades($cidades){
        foreach ($cidades as $cidade){
            echo '<tr>
                    <td>' . $cidade['cidcodigo'] .'</td><td> ' . $cidade['cidnome'] . '</td><td><a href="funcoes.php?remover_cidade=' . $cidade['cidcodigo'] . '">Remover</a></td>
                  <tr>';
        }
    }

    if (isset($_POST['cadastrar_cidade'])){
        $conexao = conectarBD();
        $dado = pg_escape_string($_POST['nome_cidade']);
        $query = "INSERT INTO MERCADO.TBCIDADE (CIDNOME)
                  VALUES ('$dado')";
        pg_query($conexao,$query);

        header('Location: cidade.php');
        exit();
    }

    if (isset($_GET['remover_cidade'])){
        $conexao = conectarBD();
        $codigo = $_GET['remover_cidade'];
        $query = "DELETE FROM MERCADO.TBCIDADE
                   WHERE CIDCODIGO = $codigo";

        pg_query($conexao,$query);

        header('Location: cidade.php');
        exit();
    }

//PÁGINA CLIENTES

    function obterClientes(){
        $conexao = conectarBD();
        $query = "SELECT CLICODIGO, CLINOME, CLICPF, CIDCODIGO
                   FROM MERCADO.TBCLIENTE;";

        $resultado = pg_query($conexao,$query);
        return pg_fetch_all($resultado);
    }

    function listarClientes($clientes){
        foreach ($clientes as $cliente){
            echo '<tr><td>' . $cliente['clinome'] . '</td><td> ' . $cliente['clicodigo'] . '</td><td>' . $cliente['clicpf'] . '</td><td>' . $cliente['cidcodigo'] . '</td><td><a href="funcoes.php?remover_cliente=' . $cliente['clicodigo'] . '">Remover</a></td>';
        }
    }

    function listarCidadesSelect($cidades){
        foreach ($cidades as $cidade){
            echo '<option value = "' . $cidade['cidcodigo'] . '">' . $cidade['cidnome'] . '</option>';
        }
    }
    if (isset($_POST['cadastrar_cliente'])){
            $conexao = conectarBD();
            $nome = $_POST['nome_cliente'];
            $cpf = $_POST['cpf'];
            $cidadeCodigo = $_POST['selecionar_cidade'];
            var_dump($nome);

            $query = "INSERT INTO MERCADO.TBCLIENTE
                                  (clinome, clicpf, cidcodigo)
                      VALUES ('$nome','$cpf','$cidadeCodigo')";

            pg_query($conexao,$query);

            header('Location: cliente.php');
            exit();
    }



    if (isset($_GET['remover_cliente'])){
        $conexao = conectarBD();
        $codigo = $_GET['remover_cliente'];
        $query = "DELETE FROM MERCADO.TBCLIENTE
                   WHERE CIDCODIGO = $codigo";

        pg_query($conexao,$query);

        header('Location: cliente.php');
        exit();
    }