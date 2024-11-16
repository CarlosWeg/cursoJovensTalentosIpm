<?php

    function gerarSenha(){
        $tamanhoSenha= rand(8,12);
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $caracteres = str_shuffle($caracteres);
        return substr($caracteres, 0, $tamanhoSenha);
    }