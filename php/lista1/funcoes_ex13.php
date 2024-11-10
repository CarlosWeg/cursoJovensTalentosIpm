<?php

    function converterVetorCubo($array){
        foreach($array as $valor){
            $valor = pow($valor,3);
        }
    }

    function imprimirVetor($array){
        foreach($array as $valor){
            echo $valor . '<br>';
        }
    }