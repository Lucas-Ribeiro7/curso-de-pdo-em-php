<?php
require_once 'pessoa.php';
    class professor extends pessoa{
        private $especialidade;
        private $salario;

        public function __construct($esp, $sal){
            $this->setEspecialidade($esp);
            $this->setSalario($sal);
        }

        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function setEspecialidade($esp){
            $this->especialidade = $esp;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($sal){
            $this->salario = $sal;
        }

        public function receberAum($aum){
            $this->setSalario($this->getSalario() + $aum);
            echo "<p>" . $this->getNome() . " seu salário teve um aumento de $aum </p>";
        }
    }