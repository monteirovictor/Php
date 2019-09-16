<?php

        class Carro{

           private $modelo;
           private $motor;
           private $ano;
           
           public function getModelo(){
               return $this->modelo;
           }
           public function setModelo($modelo){
                $this->modelo=$modelo;
           }

            public function getMotor(){
                return $this->motor;
            }
            public function setMotor($motor){
                $this->motor=$motor;
            }
            public function getAno(){
                return $this->ano;
            }
            public function setAno($ano){
                $this->ano=$ano;
            }

            public function getInfo(){
                array(
                    "modelo"=>$this->getModelo(),
                    "motor"=>$this->getMotor(),
                    "ano"=>$this->getAno()
                );
            }
    }

    $veiculo = new Carro();
    $veiculo->setModelo("GOL");
    $veiculo->setMotor("motor box");
    $veiculo->setAno("80");
    
    var_dump($veiculo->getInfo());


?>