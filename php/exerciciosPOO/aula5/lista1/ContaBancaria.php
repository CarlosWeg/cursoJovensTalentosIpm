<?php

    class ContaBancaria{
        private $cliente;
        private $dataCriacao;
        private $saldoInicial;
        private $saldoAtual;
        private $operacoes = [];

        public function setDataCriacao($dataCriacao){
            $this->dataCriacao = $dataCriacao;
        }

        public function setSaldoInicial($saldoInicial){
            $this->saldoInicial = $saldoInicial;
        }

        public function setSaldoAtual($saldoAtual){
            $this->saldoAtual = $saldoAtual;
        }

        public function sacar($valor){
            if ($valor<=$this->saldoAtual){
                $this->saldoAtual-=$valor;
                $this->registrarOperacao('Saque',$valor);
            } else {
                echo 'Saldo insuficiente';
            }

        }

        public function depositar($valor){
            $this->saldoAtual+=$valor;
            $this->registrarOperacao('Depósito',$valor);
        }

        private function registrarOperacao($op,$val){
            $this->operacoes[] = array(
                'tipo' => $op,
                'valor'=>$val
            );
        }

        public function exibeSaldo(){
            echo 'Saldo Atual: ' . number_format($this->saldoAtual,2);
        }

        public function exibeExtrato() {
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>Operação</th>';
            echo '<th>Valor</th>';
            echo '</tr>';
            foreach ($this->operacoes as $operacao) {
                echo '<tr>';
                echo '<td>' . $operacao['tipo'] . '</td>';
                echo '<td>R$ ' . number_format($operacao['valor'], 2, ',', '.') . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

    }