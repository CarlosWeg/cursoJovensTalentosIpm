<?php

    function contCaractere($text,$carac){
        $tamanho = strlen($text);
        $cont = 0;

        for ($i= 0;$i<$tamanho;$i++){
            if (substr($text,$i,1) == $carac) {
                $cont++;
            }
        }
        return $cont;
    }