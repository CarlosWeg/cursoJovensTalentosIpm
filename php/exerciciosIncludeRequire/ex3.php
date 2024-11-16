<?php

    require_once 'funcoes.php';

//Exercicio 3
// Crie uma função montaRadio() e uma função montaCheckBox() seguindo a
// mesma estrutura de parâmetros da questão anterior, porém, esta vai possuir
// um quarto parâmetro que irá indicar qual o elemento que ficará selecionado
// por padrão. Criada a função, faça um teste com o array fornecido.


    $vetorDados = ['Banana', 'Maçã', 'Abacaxi', 'Tomate', 'Morango', 'Pastel', 'Limão','Abacate', 'Melão'];
    $valor = true;
    $nomeCampo = 'frutas';
    $checked = 'Banana';

    echo '<h1>Checkbox:</h1><br>';
    montaCheckbox($vetorDados,$valor,$nomeCampo, $checked);

    echo '<h1>Radio:</h1><br>';
    montaRadio($vetorDados,$valor,$nomeCampo, $checked);