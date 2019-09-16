<?php

    class Pessoa{
        
        public $nome;
        
        public function falar(){
                return "meu nome eh Victor Rangel Monteiro Maia".$this->nome;
        }
    }

    $victor = new Pessoa();
    $victor ->nome="Qual eh meu nome";
    echo $victor->falar();


    class Time{
        public $clube="flamengo";
        public function torce(){
            return $this->clube."meu time eh";
        }

    }

    echo "<br><br>";

    $gabriel = new time();
    $gabriel->clube;
    echo $gabriel->torce().$victor->falar();
?>



