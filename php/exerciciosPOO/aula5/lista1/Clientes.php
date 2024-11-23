<?php

class Clientes{
        private $nome;
        private $email;
        private $telefone;


        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function exibir(){
            echo 'Nome: ' . $this->nome . '<br>';
            echo 'Email: ' . $this->email . '<br>';
            echo 'Telefone: ' . $this->telefone . '<br>';
        }


    }

    class ClientesFisica extends Clientes{
        private $cpf;

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function exibir(){
            parent::exibir();
            echo 'CPF: ' . $this->cpf . '<br>';
        }

    }


    class ClientesJuridico extends Clientes{
        private $cnpj;

        public function getCnpj(){
            return $this->cnpj;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function exibir(){
            parent::exibir();
            echo 'CNPJ: ' . $this->cnpj . '<br>';
        }

    }