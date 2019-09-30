<?php

 abstract class Animal{

        public function Falar()
        {
           return "som";  # code...
        }

        public function Mover()
        {
           return "move";  # code...
        }

        public function Peida()
        {
           return "peido";  # code...
        }
 }

class Cachorro extends Animal{
    public function Falar()
    {
       return "Late";  # code...
    }

}



class Gato extends Animal{
    public function Falar()
    {
       return "Mia" .parent::Peida();  # code...
    }

}

$pluto = new Cachorro;

echo $pluto->Falar();
echo $pluto->Mover();

echo "<br>";

$garfield = new Gato;

echo $pluto->Falar();
echo $pluto->Mover();
?>