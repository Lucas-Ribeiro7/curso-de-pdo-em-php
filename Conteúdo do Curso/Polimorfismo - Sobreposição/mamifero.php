<?php
require_once 'animal.php';
    class mamifero extends animal{
        private $corEscama;

        public function locomover(){
            echo "<p>Correndo</p>";
        }
        public function alimentar(){
            echo "<p>Mamando</p>";
        }
        public function emitirSom(){
            echo "<p>Som de Mamifero</p>";
        }

        public function getcorEscama(){
            return $this->corEscama;
        }
        public function setcorEscama($co){
            $this->corEscama = $co;
        }
    }