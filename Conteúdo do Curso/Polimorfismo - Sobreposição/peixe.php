<?php
require_once 'animal.php';
    class peixe extends animal{
        private $corEscama;

        public function locomover(){
            echo "<p>Nadando</p>";
        }
        public function alimentar(){
            echo "<p>Comendo a Subtância</p>";
        }
        public function emitirSom(){
            echo "<p>Peixe não faz som</p>";
        }
        public function soltarBolhas(){
            echo "<p>Soltou uma Bolha</p>";
        }

        public function getcorEscama(){
            return $this->corEscama;
        }
        public function setcorEscama($co){
            $this->corEscama = $co;
        }
    }