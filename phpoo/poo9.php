<?php


class Documento{
    
    private $numero;
    
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero){
        return $this->numero=$numero;
    }
}

class CPF extends Documento{

    public function Validar():bool
    {
        $numeroCPF = $this->getNumero();

        return true;
    }
}

$obj = new CPF();
$obj->setNumero("15567471793");
var_dump($obj->validar());








?>