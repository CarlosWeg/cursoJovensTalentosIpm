<?php

    require_once 'Clientes.php';
    require_once 'Contas.php';

    //Classe Física:

    $clienteFisica = new ClientesFisica();

    $clienteFisica->setNome('Pedro Alberto');
    $clienteFisica->setEmail('pedro@gmail.com');
    $clienteFisica->setTelefone('4796666666');
    $clienteFisica->setCPF('888.888.888-88');

    echo'<h3>Informações Cliente Físico:</h3>';
    $clienteFisica->exibir();

    //Testando Classe Conta Banco

    echo'<h3>Informações Conta Bancária Pedro:</h3>';

    $contaPedro = new ContaPoupanca($clienteFisica, '2023-03-01', 500.00, 500, 5);
    $contaPedro->Construtor();
    $contaPedro->exibeSaldo();
    $contaPedro->exibeExtrato();


?>