<?php

    function calcularConta($un){
        if ($un<=50){
            return $un * 3.50;
        } else if ($un>=51 && $un<=150){
            return $un * 4;
        } else if ($un>=151 && $un<=250){
            return $un * 5.30;
        } else if ($un>250){
            return $un * 6.70;
        }
    }