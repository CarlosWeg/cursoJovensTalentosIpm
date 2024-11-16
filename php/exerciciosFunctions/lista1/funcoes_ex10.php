<?php

    function identificarFaixa($op){
        if ($op == 'menor18'){
            return 'Menor de 18 anos';
        } else if ($op == 'acima18abaixo35'){
            return 'Acima de 18 e abaixo de 35';
        } else if ($op == 'acima35abaixo65'){
            return 'Acima de 35 e abaixo de 65';
        } else if ($op == 'acima65'){
            return 'Acima 65';
        }
    }