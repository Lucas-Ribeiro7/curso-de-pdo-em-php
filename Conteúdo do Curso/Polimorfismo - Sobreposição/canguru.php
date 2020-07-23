<?php
require_once 'mamifero.php';
    class canguru extends mamifero{
        public function usarBolsa(){
            echo "<p>Usando uma bolsa</p>";
        }
        public function locomover(){
            echo "<p>Saltando</p>";
        }
    }