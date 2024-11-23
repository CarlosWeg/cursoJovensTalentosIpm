<?php

    require_once 'Usuario.php';

    echo '<h3>Usuario</h3><br>';

    $usuarioMatheus = new Usuario();

    $usuarioMatheus->setNome('Matheus');
    $usuarioMatheus->setSobrenome('Almeida');
    $usuarioMatheus->hello();

    echo '<h3>Administrador</h3><br>';

    $usuarioRoberto = new Administrador();

    $usuarioRoberto->setNome('Roberto');
    $usuarioRoberto->setSobrenome('Souza');
    $usuarioRoberto->hello();

    echo '<h3>Cliente</h3><br>';

    $usuarioGarcia = new Cliente();

    $usuarioGarcia->setNome('Garcia');
    $usuarioGarcia->setSobrenome('Labirintite');
    $usuarioGarcia->hello();