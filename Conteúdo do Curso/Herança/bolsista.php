<?php
require_once 'aluno.php';
    class bolsista extends aluno{
        private $bolsa;

        public function renovarBolsa(){
            echo "<p>Bolsa Renovada!</p>";
        }

        public function pagarMensalidade(){
            echo "<p>O Aluno(a) " . $this->getNome() . " pagou a sua mensalidade com desconto por conta de sua bolsa.</p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bo){
            $this->bolsa = $bo;
        }
    }