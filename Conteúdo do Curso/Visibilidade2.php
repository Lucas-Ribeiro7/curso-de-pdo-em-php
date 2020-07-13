<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscando(){
        if($this -> tampada == true){
            echo "ERRO! Não se pode ser rabiscado";
        }else{
            echo "Estou rasbiscando...."; 
        }
        
    }
    public function tampar(){
        $this -> tampada = true;
    }
    public function destampar(){
        $this -> tampada = false;
    }
}