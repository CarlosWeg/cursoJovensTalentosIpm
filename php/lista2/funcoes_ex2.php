<?php

    function verificarMes($num){
        $vetorMes = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
        return $vetorMes[$num-1];
    }