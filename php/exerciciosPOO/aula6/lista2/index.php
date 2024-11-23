<?php

    require_once 'Pais.php';


// Escreva uma classe que represente um país. Um país é representado
// através dos atributos: código ISO 3166-1 (ex.: BRA), nome (ex.: Brasil),
// população (ex.: 193.946.886) e a sua dimensão em Km2 (ex.: 8.515.767,049).
// Além disso, cada país mantém uma lista de outros países com os quais ele faz
// fronteira. Desenvolva a classe atendendo os itens a seguir:
// a) Construtor que inicialize o código ISO, o nome e a dimensão do país;
// b) Métodos de acesso (getter/setter) para as propriedades código ISO, nome,
// população e dimensão do país;
// c) Um método que permita verificar se o objeto (parâmetro) representa o país
// atual (igualdade semântica). Dois países são iguais se tiverem o mesmo código
// ISO;
// d) Um método que informe se outro país (parâmetro) faz fronteira com o país
// do objeto atual;
// e) Um método que retorne a densidade populacional do país (densidade =
// habitantes / área km²);
// f) Um método que receba um país como parâmetro e retorne a lista de vizinhos
// comuns ao país atual.
// Considere que um país tem no máximo 40 outros países com os quais ele faz
// fronteira (efetuar validação).

    //Constructs iniciais

    $brasil = new Pais('BRA','Brasil',8515767.049);
    $argentina = new Pais('ARG','Argentina',2796427);
    $paraguai = new Pais('PRY', 'Paraguai', 406752);
    $inglaterra = new Pais('GB','Inglaterra',130279);

    //Testantando set e gets, dados iniciais

    $brasil->setListaFronteira($argentina);
    $brasil->setListaFronteira($paraguai);
    $brasil->setPopulacao(203080756);

    $argentina->setListaFronteira($brasil);
    $argentina->setListaFronteira($paraguai);

    $paraguai->setListaFronteira($argentina);
    $paraguai->setListaFronteira($brasil);

    //Testando função densidade
    echo 'Densidade do Brasil: ' . $brasil->getDensidade() . '<br>';
    echo'<hr>';


    //Testando funcao paises vizinhos
    echo'Países vizinhos do Brasil com Argentina: <br>';
    $vizinhosBrasilArgentina = $brasil->verificarVizinhos($argentina);
    print_r($vizinhosBrasilArgentina);
    echo'<hr>';

    //Testando função que verifica se tem fronteira
    echo'<br>';
    echo'Verificar se o objeto (parâmetro) tem fronteira com o país atual: <br>';
    if ($brasil->verificarFronteira($inglaterra)){
        echo 'Tem fronteira';
    } else{
        echo 'Não tem fronteira';
    }
    
    echo '<hr>';

    //Testando função que verifica se é igual
    echo'<br>';
    echo'Verificar se o objeto (parâmetro) representa o país atual: <br>';
    if ($brasil->igual($brasil)){
        echo 'É igual';
    } else{
        echo 'Não é igual';
    }


