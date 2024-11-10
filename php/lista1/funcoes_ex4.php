<?php
    function ocoCaractere($texto,$caractere){
        $quantidade = 0;

        for ($i = 0;$i<=strlen($texto);$i++){
                    if (substr($texto,$i, 1) == $caractere){
                        $quantidade++;
                    }
                }
        echo $quantidade;
    }