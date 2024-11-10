<?php

    function calcImc($pes,$alt){
        return $pes / ($alt * $alt);
    }

    function escreverSaudabilidade($imc){
        if ($imc>25){
            echo "Você está acima do peso!";
        } else{
            echo "Você está saudáve!";
        }
    }