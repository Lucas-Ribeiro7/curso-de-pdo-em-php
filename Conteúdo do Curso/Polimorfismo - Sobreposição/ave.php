<?php
require_once 'animal.php';
    class ave extends animal{
        private $corPena;

        public function locomover(){
            echo "<p>Voando</p>";
        }
        public function alimentar(){
            echo "<p>Comendo frutas</p>";
        }
        public function emitirSom(){
            echo "<p>Som de ave</p>";
        }
        public function fazerNinho(){
            echo "<p>Construiu um ninho</p>";
        }

        public function getcorPena(){
            return $this->corPena;
        }
        public function setcorPena($co){
            $this->corPena = $co;
        }
    }