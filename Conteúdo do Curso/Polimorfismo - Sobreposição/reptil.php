<?php
require_once 'animal.php';
    class reptil extends animal{
        private $corEscama;

        public function locomover(){
            echo "<p>Rastejando</p>";
        }
        public function alimentar(){
            echo "<p>Comento Vegetais</p>";
        }
        public function emitirSom(){
            echo "<p>Som de Reptil</p>";
        }

        public function getcorEscama(){
            return $this->corEscama;
        }
        public function setcorEscama($co){
            $this->corEscama = $co;
        }
    } 