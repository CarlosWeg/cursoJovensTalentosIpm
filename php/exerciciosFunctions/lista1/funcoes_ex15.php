<?php

    function contA($array){
        $contador = 0;
        foreach ($array as $valor){
            if ($valor == 'A'){
                $contador++;
            }
        }
        return $contador;
    }