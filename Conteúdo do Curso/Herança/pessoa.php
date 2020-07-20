<?php
    class pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function __construct($no, $id, $se){
            $this->setNome($no);
            $this->setIdade($id);
            $this->setSexo($se);
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
            return $this->sexo;
        }
        public function setSexo($se){
            $this->sexo = $se;
        }

        public function fazerAniv(){
            $this->setIdade($this->getIdade() + 1);
        }
    }