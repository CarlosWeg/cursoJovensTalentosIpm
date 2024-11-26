<?php

    class Calculo{

// 1 - Faça uma função que recebe dois números por parâmetro e retorna o maior deles.

        public function indentificarMaiorNumero($num1,$num2){
            $maior = $num1;
            $menor = $num2;

            if ($num1<$num2){
                $maior = $num2;
                $menor = $num1;
            }

            return $maior;

        }
// 2 - Faça uma função que receba por parâmetro a base e altura, retorne a área do triângulo, considerando a fórmula Área = (Base X Altura) / 2.
        public function calcAreaTriangulo($base,$altura){
            return ($base * $altura) / 2;
        }

// 3 - Faça uma função que receba por parâmetro um valor inteiro e retorne ocubo do valor.

        public function calcCubo($valor){
            return pow($valor,3); // pow — Expressão exponencial - pow($num, $exponent)

        }

// 4 - Faça uma função que receba três números inteiros diferentes, deixe os mesmo em ordem crescente e retorne um array contendo os seus valores ordenados.
        public function ordenarNumeros($num1,$num2,$num3){
            $aData = [$num1,$num2,$num3];
            sort($aData); // sort — Ordena um array em ordem ascendente - sort($array)
            return $aData;
        }

// 5 - Faça uma função que recebe duas notas, e retorna se o aluno foi aprovado ou não. Considere aprovado se a média das notas for maior ou igual a 5.0.

        public function aprovado($nota1,$nota2){
            $media = ($nota1 + $nota2) /2;

            if ($media>=5){
                return true;
            } else{
                return false;
            }
        }

// 6 - Faça uma função que receba os valores A, B e C. Retorne uma mensagem que informa se a soma de A com B é menor, maior ou igual a C.

        public function somaComparativa($a,$b,$c){
            if (($a + $b)<$c){
                return 'A + B é MENOR que C';
            } else if (($a + $b)>$c){
                return 'A + B é MAIOR que C';
            } else{
                return 'A + B é IGUAL a C';
            }
        }


// 7 - Faça uma função que receba dois números e retorne em um array a soma, subtração, multiplicação e a divisão dos números. Realize uma validação caso o usuário informe uma divisão por zero.

        public function calculosArray($num1,$num2){
            if ($num2<>0){
                $soma = $num1 + $num2;
                $subtracao = $num1 - $num2;
                $multiplicacao = $num1 * $num2;
                $divisao = $num1/$num2;
                $aData = [$soma,$subtracao,$multiplicacao,$divisao];
                return $aData;
            } else{
                return 'Divisão por zero não permitida!';
            }
        }

// 8 - Faça uma função que receba o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, retorne um texto contendo seu nome, o salário fixo e salário no final do mês.

        public function infoVendedor($nome,$salarioFixo,$totalVendas){
            define('COMISSAO',15/100); // constante COMISSAO de 15%
            $salarioFinal = $salarioFixo + ($totalVendas*COMISSAO);
            return 'O vendedor ' . $nome . ' cujo salário fixo é de ' . number_format($salarioFixo,2,',','.') . ' recebeu no total ' . number_format($salarioFinal,2,',','.');
        }


// Exercício 9 - O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que a percentagem do distribuidor seja de 28% e os impostos de 45%, faça uma função que receba o custo de fábrica de um carro e retorne o custo ao consumidor.

        public function custoCarroConsumidor($custoFabrica){
            $porDistribuidor = $custoFabrica * (28/100);
            $porImpostos = $custoFabrica * (45/100);
            $custoConsumidor = $custoFabrica + $porDistribuidor + $porImpostos;
            return $custoConsumidor;
        }

// Exercício 10 - Dados dois pontos quaisquer do plano, de coordenadas (x1, y1) para o primeiro ponto e (x2, y2) para o segundo ponto, faça uma função que receba os quatro parâmetros e retorna a distância entre eles. A fórmula que efetua tal cálculo é: d = raiz quadrada ((x2-x1)2 + (y2-y1)2).
        public function distanciaPlano($x1,$y1,$x2,$y2){
            // d = raiz quadrada de [(x2 - x1)^2 + (y2 - y1)^2]
            $d = sqrt((pow(($x2-$x1),2) + pow(($y2-$y1),2)));
            return $d;
        }
    }