<?php

require_once 'funcoes.php';
?>

<!DOCTYPE HTML>

<html lang = "pt-br">

<head>

    <title>Exercício 5</title>
    <meta charset = "UTF-8">

    <style>
        
        *{
            padding: 5px;
            margin: 5px;
        }

    </style>

</head>

<body>

    <h1>Pedido de Pizzas:</h1>

    <form>

        <fieldset id = "cliente">
        <legend>Insira os dados do cliente:</legend>
            <?php
                montaInput('text','Nome','nome','nome');
                montaInput('text','Sobrenome','sobrenome','sobrenome');
                montaInput('number','Endereço','endereco','endereco', 'min = "0" max = "9999"');
                montaInput('text','Bairro','bairro','bairro');
                montaInput('text','Cidade','cidade','cidade');
                montaInput('number','Telefone','telefone','telefone');
                montaInput('email','E-mail','email','email');
            ?>
        </fieldset>


        <fieldset id = "pedido">
        <legend>Insira as informações do pedido:</legend>

            <?php

                echo'<p>Escolha o tamanho da Pizza:</p>';
                $aTamanhos = ['Pequena', 'Média', 'Grande', 'Gigante'];
                montaRadio($aTamanhos,false,'tamanhos');

                echo '<br>';

                echo'<p>Escolha o sabor da Pizza:</p>';
                $aSabores = ['4 queijos', 'Pepperoni', 'Strogonoff de carne', 'Mexicana', 'Calabresa', 'Chocolate branco', 'Chocolate preto'];
                montaCheckbox($aSabores,false,'sabores');
                
                echo '<br>';

                echo'<p>Escolha o sabor da Borda:</p>';
                $aBordas = ['Requeijão', 'Chocolate', 'Sem borda'];
                montaRadio($aBordas,false,'bordas',2);

                echo '<br>';
                echo '<br>';

                montaInput('text', 'Observação', 'observacao', 'observacao', 'maxlength="100"');

            ?>

        </fieldset>
        
        <fieldset id = "pagamento">
            <?php

                echo'<p>Escolha o Meio de pagamento:</p>';
                $aPagamento = ['Dinheiro', 'Cartão', 'Cheque'];
                montaRadio($aPagamento,false,'pagamento');

            ?>

        </fieldset>

        <?php
            montaInput('submit');
        ?>

    </form>

</body>

</html>