<?php
require_once 'animal.php';
    class mamifero extends animal{
        public function emitirSom(){
            echo "<p>Som de mamifero</p>";
        }
    }