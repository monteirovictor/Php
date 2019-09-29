<?php

// INTERFACE , e um padrao.


interface Veiculo{

    public function Acelerar($velocidade);

    public function Frear($velocidade);

    public function trocarMarcha($marcha);
}

class Fusca implements veiculo{

        public function Acelerar($velocidade)
        {
            echo "O veiculo" .$velocidade. "km/h" ."<br>";
        }

        public function Frear($velocidade)
        {
            echo "O veiculo frenou" .$velocidade. "km/h" ."<br>";
        }

        public function trocarMarcha($marcha)
        { 
            echo "O veiculo a trocou " .$marcha. "km/h" ."<br>";
        }
}

$carro = new Fusca();

$carro->Acelerar(200);
$carro->Frear(50);
$carro->trocarMarcha(2);

?>