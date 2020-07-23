<?php
require_once 'mamifero.php';
    class cachorro extends mamifero{
        public function enterrarOsso(){
            echo "<p>Enterrando Osso</p>";
        }
        public function emitirSom(){
            echo "<p>AU AU AU</p>";
        }
    }