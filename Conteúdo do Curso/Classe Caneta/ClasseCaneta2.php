<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscando(){
        if($this -> tampada == true){
            echo "ERRO! Não se pode ser rabiscado";
        }else{
            echo "Estou rasbiscando...."; 
        }
        
    }
    function tampar(){
        $this -> tampada = true;
    }
    function destampar(){
        $this -> tampada = false;
    }
}