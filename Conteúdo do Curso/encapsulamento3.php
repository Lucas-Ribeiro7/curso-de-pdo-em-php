<?php
require_once 'encapsulamento2.php';
    class ControleRemoto implements Controlador{      
        //Atributos
        private $volume;
        private $ligado;
        private $tocando;
        //Métodos Especiais
        public function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($v){
            $this->volume = $v;
        
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($l){
            $this->ligado = $l;
        }

        private function getTocando(){
            return $this->tocando;
        }
        private function setTocando($t){
            $this->tocando = $t;
        }

        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<br>Está ligado: " . ($this->getLigado()?"SIM":"NÃO");
            echo "<br>Está tocando: " . ($this->getTocando()?"SIM":"NÃO");
            echo "<br>Volume: " . $this->getVolume();
            for($i = 0 ; $i <= $this->getVolume() ; $i+=10){
                echo " | ";
            }
        }
        public function fecharMenu(){
            echo "Fechando o menu...";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            } else {
                echo "<br>ERRO! Não se pode aumentar o volume com o aparelho desligado.";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            } else {
                echo "<br>ERRO! Não se pode diminuir o volume com o aparelho desligado.";
            }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume()>0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume()==0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if($this->getLigado() && !$this->getTocando()){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }

    }