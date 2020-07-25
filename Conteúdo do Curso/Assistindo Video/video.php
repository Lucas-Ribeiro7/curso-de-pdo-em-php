<?php
require_once 'acoesVideo.php';
    class video implements acoesVideos{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($ti){
            $this->titulo = $ti;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function play(){
            $this->setReproduzindo(true);
        }
        public function pause(){
            $this->setReproduzindo(false);
        }
        public function like(){
            $this->setCurtidas($this->getCurtidas()+1);
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($ti){
            $this->titulo = $ti;
        }

        public function getAvaliacao(){
            return $this->avaliacao;
        }
        public function setAvaliacao($av){
            $media = ($this->getAvaliacao() + $av)/$this->getViews();
            $this->avaliacao = $media;
        }

        public function getViews(){
            return $this->views;
        }
        public function setViews($vi){
            $this->views = $vi;
        }

        public function getCurtidas(){
            return $this->curtidas;
        }
        public function setCurtidas($cur){
            $this->curtidas = $cur;
        }

        public function getReproduzindo(){
            return $this->reproduzindo;
        }
        public function setReproduzindo($re){
            $this->reproduzindo = $re;
        }

        
    }