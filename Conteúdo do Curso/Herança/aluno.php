<?php
require_once 'pessoa.php';
    class aluno extends pessoa{
        private $matr;
        private $curso;

        public function __construct($mat, $cur){
            $this->setMatr($mat);
            $this->setCurso($cur);
        }

        public function getMatr(){
            return $this->matr;
        }
        public function setMatr($mat){
            $this->matr = $mat;
        }

        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($cur){
            $this->curso = $cur;
        }

        public function cancelarMatr(){
            $this->setMatr(0);
            echo "<p>" . $this->getNome() . " sua matricula foi cancelada</p>";
        }
    }