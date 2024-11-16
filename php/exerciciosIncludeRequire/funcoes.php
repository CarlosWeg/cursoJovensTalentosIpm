<?php

function montaSelect($arrayDados,$nomeCampo,$valor = true){
    echo '<select name = "' . $nomeCampo . '">';
    foreach ($arrayDados as $index =>$conteudo){
            
        if ($valor){
            $valorSelect = $conteudo;
        } else{
            $valorSelect = $index;
        }
            
        echo'<option value = "' . $valorSelect . '">' . $conteudo . '</option>';
    }
    echo '</select>';
}


function montaRadio($arrayDados,$valor,$nomeCampo, $valorCheck = ''){
    foreach ($arrayDados as $index =>$conteudo){

        if ($valor){
            $valorRadio = $conteudo;
        } else{
            $valorRadio = $index;
        }

        $check = '';
        if ($valorCheck == $valorRadio) {
            $check = 'checked';
        }

        echo '<label for = "' . $nomeCampo . '">' . $conteudo . '</label>';
        echo '<input type = "radio" value = "' . $valorRadio . '" name = "' . $nomeCampo . '" ' . $check . '>';

    }
}

function montaCheckbox($arrayDados,$valor,$nomeCampo, $valorCheck = ''){
    foreach ($arrayDados as $index =>$conteudo){

        if ($valor){
            $valorRadio = $conteudo;
        } else{
            $valorRadio = $index;
        }

        $check = '';
        if ($valorCheck == $valorRadio) {
            $check = 'checked';
        }

        echo '<label for = "' . $nomeCampo . '">' . $conteudo . '</label>';
        echo '<input type = "checkbox" value = "' . $valorRadio . '" name = "' . $nomeCampo . '" ' . $check . '>';
    }
}

function montaInput($tipo, $conteudo = '', $nomeCampo = '', $id = '', $atributo = ''){
    echo '<label for = "' . $id . '">' . $conteudo . ' </label>';
    echo '<input type = "' . $tipo . '" name = "' . $nomeCampo . '" id = "' . $id . '"' . $atributo . '>';
}