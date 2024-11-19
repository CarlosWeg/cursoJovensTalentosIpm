<?php

    require_once'professor.php';


    $profRegime = new ProfessorRegime("001", "Ana", 5000);
    echo $profRegime->getInformacoes() . "<br>";
    echo "Salário: R$ " . $profRegime->calculaSalario() . "<br><br>";

    $profHorista = new ProfessorHorista("002", "Carlos", 20, 50);
    echo $profHorista->getInformacoes() . "<br>";
    echo "Salário: R$ " . $profHorista->calculaSalario();
