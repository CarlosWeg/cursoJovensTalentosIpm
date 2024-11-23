<?php

// Classe abstrata Professor
abstract class Professor {
    protected $matricula;
    protected $nome;
    protected $cargaHoraria;
    protected $salario;

    public function __construct($matricula, $nome, $cargaHoraria) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
    }
    abstract public function calculaSalario();

    public function getInformacoes() {
        return 'Matricula: ' . $this->matricula . ' Nome: ' . $this->nome .' Carga Horária: '. $this->cargaHoraria . ' horas.';
    }
}

// Classe ProfessorRegime (carga horária fixa de 40 horas)
class ProfessorRegime extends Professor {
    private $salarioFixo;

    public function __construct($matricula, $nome, $salarioFixo) {
        parent::__construct($matricula, $nome, 40);
        $this->salarioFixo = $salarioFixo;
    }

    public function calculaSalario() {
        return $this->salarioFixo;
    }
}

// Classe ProfessorHorista (carga horária variável)
class ProfessorHorista extends Professor {
    private $salarioPorHora;

    public function __construct($matricula, $nome, $cargaHoraria, $salarioPorHora) {
        parent::__construct($matricula, $nome, $cargaHoraria);
        $this->salarioPorHora = $salarioPorHora;
    }

    public function calculaSalario() {
        return $this->cargaHoraria * $this->salarioPorHora;
    }
}