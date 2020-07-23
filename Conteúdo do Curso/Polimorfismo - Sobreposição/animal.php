<?php
abstract class animal{
    protected $peso;
    protected $idade;
    protected $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($pe){
        $this->peso = $pe;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($id){
        $this->idade = $id;
    }

    public function getMembros(){
        return $this->membros;
    }
    public function setMembros($me){
        $this->membros = $me;
    }

}