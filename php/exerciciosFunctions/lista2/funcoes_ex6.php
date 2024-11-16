<?php

    function contPalavras($text){
        $vetor = explode(" ",trim($text));
        $vetor = array_filter($vetor);
        return count($vetor);
    }