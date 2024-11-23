<?php

    require_once 'Calculo.php';

    $atividades = new Calculo;

    echo '<h3>Exercício 1 -Faça uma função que recebe dois números por parâmetro e retorna o maior deles.</h3>';
    echo $atividades->indentificarMaiorNumero(5,10);

    echo '<hr>';

    echo '<h3>Exercício 2 - Faça uma função que receba por parâmetro a base e altura, retorne a área do triângulo, considerando a fórmula Área = (Base X Altura) / 2. </h3>';
    echo $atividades->calcAreaTriangulo(5,10);

    echo '<hr>';

    echo '<h3>Exercício 3 - Faça uma função que receba por parâmetro um valor inteiro e retorne o cubo do valor.</h3>';
    echo $atividades->calcCubo(3);

    echo '<hr>';

    echo '<h3>Exercício 4 - Faça uma função que receba três números inteiros diferentes, deixe os mesmo em ordem crescente e retorne um array contendo os seus valores ordenados. </h3>';
    $ordenados = $atividades->ordenarNumeros(50,40,10);
    print_r($ordenados);

    echo '<hr>';

    echo '<h3>Exercício 5 - Faça uma função que recebe duas notas, e retorna se o aluno foi aprovado ou não. Considere aprovado se a média das notas for maior ou igual a 5.0. </h3>';
    if ($atividades->aprovado(8,4)){
        echo'Aprovado!';
    } else{
        echo'Reprovado!';
    }

    echo '<hr>';

    echo '<h3>Exercício 6 - Faça uma função que receba os valores A, B e C. Retorne uma mensagem que informa se a soma de A com B é menor, maior ou igual a C. </h3>';
    echo $atividades->somaComparativa(2,8,30);

    echo '<hr>';

    echo '<h3>Exercício 7 - Faça uma função que receba dois números e retorne em um array a soma, subtração, multiplicação e a divisão dos números. Realize uma validação caso o usuário informe uma divisão por zero.</h3>';
    $calculosArray = $atividades->calculosArray(10,20);
    print_r($calculosArray);

    echo '<hr>';

    echo '<h3>Exercício 8 - Faça uma função que receba o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, retorne um texto contendo seu nome, o salário fixo e salário no final do mês.</h3>';
    echo $atividades->infoVendedor('Junior',1800,1000);

    echo '<hr>';

    echo '<h3>Exercício 9 - O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que a percentagem do distribuidor seja de 28% e os impostos de 45%, faça uma função que receba o custo de fábrica de um carro e retorne o custo ao consumidor. </h3>';
    echo number_format($atividades->custoCarroConsumidor(12000),2,',','.');

    echo '<hr>';

    echo '<h3>Exercício 10 - Dados dois pontos quaisquer do plano, de coordenadas (x1, y1) para o primeiro ponto e (x2, y2) para o segundo ponto, faça uma função que receba os quatro parâmetros e retorna a distância entre eles. A fórmula que efetua tal cálculo é: d = raiz quadrada ((x2-x1)2 + (y2-y1)2).</h3>';
    echo $atividades->distanciaPlano(1,4,6,8);

    