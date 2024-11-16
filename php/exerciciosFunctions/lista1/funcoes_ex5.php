<?php

    function calcMedia($valor1,$valor2,$valor3,$valor4){
        return ($valor1 + $valor2 + $valor3 + $valor4) / 4;
    }

    function imprimirAprovacao($media){
        if ($media >=7){
            return "Aprovado!";
        } else{
            return "Reprovado!";
        }
    }