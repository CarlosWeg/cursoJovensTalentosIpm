<?php

    function verificarSenha( $pass, $name){
        if ( $pass == $name) {
            return true;
        } else {
            return false;
        }
    }