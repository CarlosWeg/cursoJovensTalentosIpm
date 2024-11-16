<?php

require_once 'funcoes.php';

//Exercício 4
// Crie uma função montaInput() para gerar input type de vários tipos (text,
// number, e-mail…), crie os parâmetros necessários para o correto
// funcionamento dos principais tipos de campos (nome, tipo, id…)


echo '<h1>Input:</h1><br>';
$tipo = 'text';
$conteudo = 'Nome Completo';
$nomeCampo = 'nome_completo';
$id = 'nome_completo';

montaInput($tipo, $conteudo, $nomeCampo, $id);