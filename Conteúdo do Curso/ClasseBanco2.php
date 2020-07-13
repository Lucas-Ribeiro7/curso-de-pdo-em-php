<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Método Construtor
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com Sucesso!</p>";
        }

        //Métodos Getters e Setters
        public function setnumConta($num){
            $this->numConta = $num;
        }
        public function getnumConta(){
            return $this->numConta;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getTipo(){
            return $this->tipo;
        }

        public function setDono($d){
            $this->dono = $d;
        }
        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($sta){
            $this->status = $sta;
        }
        public function getStatus(){
            return $this->status;
        }
     
        //Método Abrir Conta
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->setSaldo(50);
            }else if($t == "CP"){
                $this->setSaldo(150);
            }
        }

        //Método Fechar Conta
        public function fecharConta(){
            if($this->saldo > 0){
                echo "Conta está com dinheiro. Não pode ser fechado.";
            }else if($this->saldo < 0){
                echo "Sua conta está em débito. Não pode ser fechado.";
            }else{
                $this->setStatus(false);
                echo "<p>Conta de " . $this->getDono() . " Fechada com sucesso!</p>";
            }
        }

        //Método Depositar
        public function depositar($v){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo()+$v);
                echo "<p>Deposito de $v na conta de " . $this->getDono() . "</p>";
            }else{
                echo "Conta fechada. Impossível Depositar.";
            }
        }

        //Método Sacar
        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo()-$v);
                    echo "<p>Saque de $v Reais, efetuado com sucesso por " . $this->getDono() . "</p>";
                }else if($this->saldo < $v){
                    echo "Saldo Insuficiente.";
                }
            }else{
                echo "Impossível sacar.";
            }
        }

        //Método Pagar Tarifa
        public function pagarTarifa(){
            $v;
            if($this->tipo == "CC"){
                $v = 20;
            }else if($this->tipo == "CP"){
                $v = 10;
            }
            if($this->getStatus()){
                if($this->saldo > $v){
                   $this->setSaldo($this->getSaldo()-$v); 
                   echo "<p>Tarifa de $v Reais, foi debitada com sucesso na conta de " . $this->getDono() . "</p>";
                }else{
                    echo "Saldo insufiente.";
                }
            }else{
                echo "Impossivel pagar.";
            }
        }



    }