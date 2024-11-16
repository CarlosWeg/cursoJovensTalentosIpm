<?php

require_once 'funcoes.php';

//Exercicio 2
//Crie um select/option dinamicamente a partir do array fornecido. Automatize
// esse processo criando uma função montaSelect().
// ● Parâmetro 1: array de dados;
// ● Parâmetro 2: nome do campo;
// ● Parâmetro 3: true ou false (caso for true, o valor de cada option será o
// próprio texto do índice do array, caso for false, o valor de cada option
// deverá ser um sequencial numérico.


    $vetorDados = ['Banana', 'Maçã', 'Abacaxi', 'Tomate', 'Morango', 'Pastel', 'Limão','Abacate', 'Melão'];
    $nomeSelect = 'frutas';
    $valor = true;

    echo '<h1>Select:</h1><br>';
    montaSelect($vetorDados,$nomeSelect,$valor);