<?php

    require_once 'Clientes.php';
    require_once 'ContaBancaria.php';

    //Teste de classes:


    //Classe cliente:

    $cliente1 = new Clientes();

    $cliente1->setNome('João Bastos');
    $cliente1->setEmail('joao@gmail.com');
    $cliente1->setTelefone('4799999999');

    $cliente2 = new Clientes();

    $cliente2->setNome('Bernardo Luiz');
    $cliente2->setEmail('bernardo@gmail.com');
    $cliente2->setTelefone('47988888888');

    echo'<h3>Informações Cliente 1:</h3>';
    $cliente1->exibir();

    echo'<h3>Informações Cliente 2:</h3>';
    $cliente2->exibir();

    //Classe Física:

    $clienteFisica = new ClientesFisica();

    $clienteFisica->setNome('Pedro Alberto');
    $clienteFisica->setEmail('pedro@gmail.com');
    $clienteFisica->setTelefone('4796666666');
    $clienteFisica->setCPF('888.888.888-88');

    echo'<h3>Informações Cliente Físico:</h3>';
    $clienteFisica->exibir();

    //Classe Cliente Jurídico

    $clienteJuridico = new ClientesJuridico();

    $clienteJuridico->setNome('João Long');
    $clienteJuridico->setEmail('joaolong@gmail.com');
    $clienteJuridico->setTelefone('47955555555');
    $clienteJuridico->setCnpj('20.031.219/0002-46');

    echo'<h3>Informações Cliente Jurídico:</h3>';
    $clienteJuridico->exibir();


    //Testando Classe Conta Banco

    echo'<h3>Informações Conta Bancária Pedro:</h3>';

    $contaPedro = new ContaBancaria($clienteFisica);
    $contaPedro->setDataCriacao('2023-03-01');
    $contaPedro->setSaldoInicial(500.00);
    $contaPedro->setSaldoAtual(500.00);
    

    $contaPedro->depositar(100.00);
    $contaPedro->sacar(50.00);
    $contaPedro->sacar(20.00);
    
    $contaPedro->exibeSaldo();
    $contaPedro->exibeExtrato();











?>