<?php
    class pessoa{
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        //Construtor
        public function __construct($no , $ida, $se){
            $this->nome = $no;
            $this->idade = $ida;
            $this->sexo = $se;
        }

        //Getters e Setters

        //Atributo $nome
        public function getNome(){
            return $this->nome;
        }
        public function setNome($no){
            $this->nome = $no;
        }
        //Atributo $idade
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($ida){
            $this->idade = $ida;
        }
        //Atributo $sexo
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($se){
            $this->sexo = $se;
        }

        //Métodos

        public function fazerAnive(){
            $this->setIdade(getIdade()+1);
        }
        public function maior18(){
            if($this->getIdade() >= 18){
                echo "<p>Você é de maior</p>";
            }else{
                echo "<p>Você é de menor</p>";
            }
        }
    }