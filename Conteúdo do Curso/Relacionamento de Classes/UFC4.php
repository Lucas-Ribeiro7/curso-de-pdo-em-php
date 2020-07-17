<?php
require_once 'UFC3.php';
require_once 'UFC2.php';
    class luta{
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovado;
        //Getters e Setters
        public function getDesafiado(){
            return $this->desafiado;
        }
        public function setDesafiado($dd){
            $this->desafiado = $dd;
        }

        public function getDesafiante(){
            return $this->desafiante;
        }
        public function setDesafiante($de){
            $this->desafiante = $de;
        }

        public function getRounds(){
            return $this->rounds;
        }
        public function setRounds($r){
            $this->rounds = $r;
        }

        public function getAprovado(){
            return $this->aprovado;
        }
        public function setAprovado($ap){
            $this->aprovado = $ap;
        }
        //Métodos
        public function marcarLuta($l1 , $l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this->aprovado = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovado = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar(){
            if($this->aprovado == true){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2); //Valor aleatório de 0 á 2 
                switch ($vencedor){
                    case 1 : //Empate
                        echo "<p><strong>Luta empatada</strong></p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                    case 2 : //Desafiado ganha
                        echo "<p><strong>Lutador " . $this->desafiado->getNome() . ", ganhou a luta</strong></p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;
                    case 3 : //Desafiante ganhou
                        echo "<p><strong>O lutador " . $this->desafiante->getNome() . ", ganhou a luta</strong></p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganhouLuta();
                    break;
                }
            }else{
                echo "<p><strong>Luta não foi aprovado!</strong></p>";
            }

        }

    }