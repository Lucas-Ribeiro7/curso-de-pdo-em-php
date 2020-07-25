<?php
require_once 'pessoa.php';
    class aluno extends pessoa{
        private $login;
        private $totAssistindo;

        public function viuMaisUm(){
            $this->totAssistindo += 1;
        }

        public function __construct($no, $id, $se, $lo){
            parent::__construct($no, $id, $se);
            $this->login = $lo;
            $this->totAssistindo = 0;
        }

        public function getLogin(){
            return $this->login;
        }
        public function setLogin($lo){
            $this->login = $lo;
        }

        public function gettotAssistindo(){
            return $this->totAssistindo;
        }
        public function settotAssistindo($to){
            $this->totAssistindo = $to;
        }
    }