<?php


class Usuario {
    private $nome;
    private $sobrenome;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function hello() {
        echo 'Olá, usuário: ' . $this->nome . ' ' . $this->sobrenome;
    }
}

class Administrador extends Usuario {
    public function hello() {
        echo 'Olá, Administrador: ' . $this->getNome() . ' ' . $this->getSobrenome();
    }
}

class Cliente extends Usuario {
    public function hello() {
        parent::hello();
        echo ' Seja bem vindo!';
    }
}

?>
