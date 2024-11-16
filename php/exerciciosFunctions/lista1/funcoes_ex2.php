<?php

    function imprimirIntermediarios($num1,$num2){

        $maior = $num1;
        $menor = $num2;
        if ($num2>$num1){
             $maior = $num2;
             $menor = $num1;
            }

         for($i = $menor+1;$i<$maior;$i++){
             echo $i . "<br>";
          }
    }