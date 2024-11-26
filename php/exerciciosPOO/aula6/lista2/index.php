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


    // Criando instâncias de países
    $brasil = new Pais('BRA', 'Brasil', 8515767.049);
    $argentina = new Pais('ARG', 'Argentina', 2796427);
    $paraguai = new Pais('PRY', 'Paraguai', 406752);
    $inglaterra = new Pais('GBR', 'Inglaterra', 130279);

    // Configurando as populações
    $brasil->setPopulacao(203080756);
    $argentina->setPopulacao(45195777);
    $paraguai->setPopulacao(7132530);
    $inglaterra->setPopulacao(55980000);

    // Adicionando países à lista de fronteiras
    $brasil->setListaFronteira($argentina);
    $brasil->setListaFronteira($paraguai);

    $argentina->setListaFronteira($brasil);
    $argentina->setListaFronteira($paraguai);

    $paraguai->setListaFronteira($brasil);
    $paraguai->setListaFronteira($argentina);

    // Testando densidade populacional
    echo 'Densidade do Brasil: ' . $brasil->getDensidade() . " hab/km²<br>";
    echo 'Densidade da Argentina: ' . $argentina->getDensidade() . " hab/km²<br>";
    echo 'Densidade do Paraguai: ' . $paraguai->getDensidade() . " hab/km²<br>";
    echo 'Densidade da Inglaterra: ' . $inglaterra->getDensidade() . " hab/km²<br>";
    echo '<hr>';

    // Testando igualdade semântica
    //<condição> ? <valor_se_verdadeiro> : <valor_se_falso>;
    echo 'O Brasil é igual ao Paraguai? ';
    echo $brasil->igual($paraguai) ? 'Sim' : 'Não';
    echo '<br>';

    echo 'O Brasil é igual ao Brasil? ';
    echo $brasil->igual($brasil) ? 'Sim' : 'Não';
    echo '<br><hr>';

    // Testando fronteiras
    echo 'A Inglaterra faz fronteira com o Brasil? ';
    echo $brasil->verificarFronteira($inglaterra) ? 'Sim' : 'Não';
    echo '<br>';

    echo 'A Argentina faz fronteira com o Brasil? ';
    echo $brasil->verificarFronteira($argentina) ? 'Sim' : 'Não';
    echo '<br><hr>';

    // Testando vizinhos em comum
    echo 'Vizinhos em comum entre Brasil e Argentina: <br>';
    $vizinhosComuns = $brasil->verificarVizinhos($argentina);
    if (!empty($vizinhosComuns)) {
        print_r($vizinhosComuns);
    } else {
        echo 'Nenhum vizinho em comum.';
    }
    echo '<br>';

    echo 'Vizinhos em comum entre Brasil e Inglaterra: <br>';
    $vizinhosComuns = $brasil->verificarVizinhos($inglaterra);
    if (!empty($vizinhosComuns)) {
        print_r($vizinhosComuns);
    } else {
        echo 'Nenhum vizinho em comum.';
    }
    echo '<br><hr>';

    // Testando limite de fronteiras
    echo 'Testando limite de fronteiras:<br>';
    try {
        for ($i = 0; $i < 41; $i++) {
            $novoPais = new Pais('PA' . $i, 'Pais' . $i, 100000);
            $brasil->setListaFronteira($novoPais);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }