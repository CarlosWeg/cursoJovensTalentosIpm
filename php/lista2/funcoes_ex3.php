<?php


    function imprimirVetorOrdenado($array){
        sort($array);

        foreach($array as $nome){
            echo $nome . '<br>';
        }
    }