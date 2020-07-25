<?php
    abstract class pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiecia;

        public function __construct($no , $id, $se){
            $this->nome = $no;
            $this->idade = $id;
            $this->sexo = $se;
            $this->experiencia = 0;
        }

        protected function ganharExperiencia(){
            $this->setExperiencia($this->getExperiencia() + 1);
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($no){
            $this->nome = $no;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($id){
            $this->idade = $id;
        }

        public function getSexo(){
            return $this->Sexo;
        }
        public function setSexo($se){
            $this->sexo = $se;
        }

        public function getExperiencia(){
            return $this->experiencia;
        }
        public function setExperiencia($ex){
            $this->experiencia = $ex;
        }
    } 