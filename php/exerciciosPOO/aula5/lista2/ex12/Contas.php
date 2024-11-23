<?php

    class ContaBancaria{
        protected $cliente;
        protected $dataCriacao;
        protected $saldoInicial;
        protected $saldoAtual;
        protected $operacoes = [];

        public function __construct($cliente,$saldoInicial,$saldoAtual) {
            $this->cliente = $cliente;
            $this->saldoInicial = $saldoInicial;
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

        protected function registrarOperacao($op,$val){
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

    class ContaPoupanca extends ContaBancaria {
        private $taxaJuros;

        public function __construct($cliente,$saldoInicial,$saldoAtual,$taxaJuros){
            parent:: __construct($cliente,$saldoInicial,$saldoAtual);
            $this->taxaJuros = $taxaJuros / 100;
        }

        public function construtor(){
            $valorRendimento = $this->saldoAtual * $this->taxaJuros;
            $this->adicionarRendimento($valorRendimento);
        }

        public function adicionarRendimento($valorRendimento){
            $this->saldoAtual+=$valorRendimento;
            $this->registrarOperacao('Rendimento',$valorRendimento);
        }

    }