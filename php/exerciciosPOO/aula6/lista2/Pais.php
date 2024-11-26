<?php

    class Pais{
        private $codigoISO;
        private $nome;
        private $populacao;
        private $dimensao;
        private $listaFronteira = [];


        public function setCodigoISO($codigoISO){
            $this->codigoISO = $codigoISO;
        }

        public function getCodigoIso(){
            return $this->codigoISO;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setPopulacao($populacao){
            $this->populacao = $populacao;
        }
        public function getPopulacao(){
            return $this->populacao;
        }

        public function setDimensao($dimensao){
            $this->dimensao = $dimensao;
        }

        public function getDimensao(){
            return $this->dimensao;
        }

        public function setListaFronteira($pais){
            if (count($this->listaFronteira)<40){
                $this->listaFronteira[] = $pais;
            } else{
                throw new Exception('Erro: um país tem no máximo 40 outros países com os quais ele faz fronteira');
            }
        }

        public function getListaFronteira(){
            return $this->listaFronteira;
        }

        public function __construct($codigoISO,$nome,$dimensao){
            $this->codigoISO = $codigoISO;
            $this->nome = $nome;
            $this->dimensao = $dimensao;
        }

        public function igual(Pais $pais){
            if ($pais->getCodigoIso() == $this->getCodigoIso()){
                return true;
            } else{
                return false;
            }
        }

        public function verificarFronteira(Pais $pais){
            foreach ($this->listaFronteira as $paisLista){
                if ($paisLista == $pais){
                    return true;
                }
            }
            return false;
        }

        public function getDensidade(){
            return number_format($this->getPopulacao() / $this->getDimensao(), 2);
        }

        public function verificarVizinhos(Pais $paisParam){

            $aVizinhos = [];

            foreach($paisParam->listaFronteira as $paisParamVizinho){
                foreach($this->listaFronteira as $paisVizinho){
                    if ($paisParamVizinho == $paisVizinho){
                        $aVizinhos[] = $paisParamVizinho->getNome();
                    }
                }
            }

            return $aVizinhos;
        }


    }