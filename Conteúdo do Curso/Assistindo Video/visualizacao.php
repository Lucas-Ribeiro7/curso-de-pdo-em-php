<?php
require_once 'aluno.php';
require_once 'video.php';
    class visualizacao{
        private $espectador;
        private $filme;

        public function avaliar(){
            $this->filme->setAvaliacao(10);
        }
        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }
        public function avaliarPorc($porc){
            $nova;
            if($porc <=20){
                $nova = 3;
            }else if($porc <=50){
                $nova = 5;
            }else if($porc <=90){
                $nova = 8;
            }else{
                $nova = 10;
            }
            $this->filme->setAvaliacao($nova);
        }

        public function __construct($es, $fi){
            $this->espectador = $es;
            $this->filme = $fi;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->settotAssistindo($this->espectador->gettotAssistindo() + 1);
        }
    
        public function getEspectador(){
            return $this->espectador;
        }
        public function setEspectador($es){
            $this->espectador = $es;
        }
        public function getFilme(){
            return $this->filme;
        }
        public function setFilme($fi){
            $this->filme = $fi;
        }
    }



    