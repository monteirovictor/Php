<?php

    // PHP OO

    // clube de futebol
    class ClubeFutebol{

        private $nome;
        private $anodefundacao;
        private $titulos;

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome=$nome;
        }

        public function getAnoDeFuncadao(){
            return $this->anodefundacao;
        }
        public function setAnoDeFuncadao($anodefundacao){
            $this->anodefundacao=$anodefundacao;
        } 

        public function getTitulos(){
            return $this->titulos;
        }

        public function setTitulos($titulos){
            $this->titulos=$titulos;
        }
    }

    $flamengo = new ClubeFutebol();
    $flamengo->setNome("Flamengo");
    $flamengo->setAnoDeFuncadao("1895");
    $flamengo->setTitulos("Hexa Campeao");

    echo $flamengo->getNome(); 
    "<br>";
    echo $flamengo->getAnoDeFuncadao();
     "<br>";
    echo $flamengo->getTitulos();



    











?>
