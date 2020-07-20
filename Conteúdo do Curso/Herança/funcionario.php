<?php
require_once 'pessoa.php';
    class funcionario extends pessoa{
        private $setor;
        private $trabalhando;

        public function __construct($set, $tra){
            $this->setSetor($set);
            $this->setTrabalhando($tra);
        }

        public function getSetor(){
            return $this->setor;
        }
        public function setSetor($set){
            $this->setor = $set;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }
        public function setTrabalhando($tra){
            $this->trabalhando = $tra;
        }

        public function mudarSetor($mud){
            $this->setSetor($mud);
        }
    }