<?php
    require_once 'pessoa.php';
    require_once 'biblioteca.php';
    class livro implements livraria{
        //Atributos
        private $titulo;
        private $autor;
        private $totPag;
        private $pagAtual;
        private $aberto;
        private $leitor;
        //Construtor
        public function __construct($ti , $au , $totP , $le){
            $this->titulo = $ti;
            $this->autor = $au;
            $this->totPag = $totP;
            $this->pagAtual = 0;
            $this->aberto = false; 
            $this->leitor = $le;            
        }

        //Getters e Setters
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($ti){
            $this->titulo = $ti;
        }

        public function getAutor(){
            return $this->autor;
        }
        public function setAutor($au){
            $this->autor = $au;
        }

        public function gettotPag(){
            return $this->totPag;
        }
        public function settotPag($totP){
            $this->totPag = $totp;
        }

        public function getpagAtual(){
            return $this->pagAtual;
        }
        public function setpagAtual($pagA){
            $this->pagAtual = $pagA;
        }

        public function getAberto(){
            return $this->aberto;
        }
        public function setAberto($ab){
            $this->aberto = $ab;
        }

        public function getLeitor(){
            return $this->leitor;
        }
        public function setLeitor($le){
            $this->leitor = $le;
        }

        //Métodos
        public function detalhes(){
            echo "<hr>";
            echo "<p>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor() . ", com um total de " . $this->gettotPag() . " paginas, e no momento quem alugou para a leitura foi " . $this->leitor->getNome() . ", no momento ele está na pagina " . $this->getpagAtual() . "</p>";
        }

        //Métodos da interface
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto - false;
        }
        public function folhear($p){
            if($p > $this->gettotPag()){
                $this->pagAtual = 0;
            }else{
                $this->setpagAtual($p);
            }
        }
        public function avancarPag(){
            if($this->getpagAtual() >= $this->gettotPag()){
                echo "<p>Você não pode avançar a página</p>";
            }else{
                $this->pagAtual ++;
            }
            
        }
        public function voltarPag(){
            if($this->getpagAtual() == 0){
                echo "<p>Não pode voltar</p>";
            }else{
                $this->pagAtual --;
            }
            
        }

    }
    
