<?php

// metodo magico 

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;


    public function __construct($log,$nume,$c){
        $this->logradouro=$log;
        $this->numero=$nume;
        $this->cidade=$c;
    }

    // public function __destruct(){
    //     var_dump("destruir");
    // }

    public function __toString(){
    
    {
        return $this->logradouro. ",".$this->cidade;
    }
    


}

$v = new Endereco("Fronteira","14","macae");
echo $;
// var_dump($end);
// unset($end);

?>