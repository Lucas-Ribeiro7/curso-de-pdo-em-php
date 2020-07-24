<?php
require_once 'lobo.php';
    class cachorro extends lobo{
        public function emitirSom(){
            echo "<p>Au! Au! Au!</p>";
        }

        public function reagirFrase($frase){
            if($frase == "Tome a sua comida" || $frase == "Olá"){
                echo "<p>Abanar o Rabo e Latir</p>";
            }else{
                echo "<p>Rosnar</p>";
            }
        }
        public function reagirHora($hora){
            if($hora<12){
                echo "<p>Abanar o rabo</p>";
            } else if ($hora>=18){
                echo "<p>Ignorar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }
        public function reagirDono($dono){
            if($dono == true){
                echo "<p>Abanar o rabo</p>";
            }else{
                echo "<p>Rosnar e Latir</p>";
            }
        }
        public function reagirIdadePeso($idade , $peso){
            if($idade<4){
                if($peso<10){
                    echo "<p>Abanar</p>"; 
                }else{
                    echo "<p>Latir</p>";
                }   
            }else{
                if($peso<10){
                    echo "<p>Rosnar</p>"; 
                }else{
                    echo "<p>Ignorar</p>";
                } 
            }
        }
    }
