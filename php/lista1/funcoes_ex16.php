<?php

    function imprimirInformacoes($nom,$data,$sal,$alug){
        echo 'Olá, ' . $nom . ' você tem ' . calcularIdade($data) . ' anos, você ganha ' . calcularSalario($sal) . ' lhe resta ' . calcularRestante(calcularSalario($sal),$alug);
    }

    function calcularIdade($dataNascimento){
        $dataAtual = new DateTime($dataNascimento );
        $intervalo = $dataAtual->diff( new DateTime( date('Y-m-d') ) );
        return $intervalo->format( '%Y' );

    }

    function calcularSalario($sal){
        return $sal * horas;
    }

    function calcularRestante($sal,$alug){
        return $sal - $alug;
    }