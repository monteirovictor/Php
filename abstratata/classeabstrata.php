<?php

    
interface Pessoa{

    public function Nome($nome);
    public function Logradouro($logradouro);
    public function Cidade($cidade);
    public function Estado($estado);

}

Abstract class Cliente implements Pessoa{

    public function Nome($nome)
    {
        echo "O nome do Cliente e " .$nome. "<br>";
    }

    public function Logradouro($logradouro)
    {
        echo " O cliente mora do Endereço" .$logradouro."<br>";
    }

    public function Cidade($cidade)
    {
        echo "A cidade do Cliente e" .$cidade."<br>";
    }

    public function Estado($estado)
    {
        echo "No Estado" .$estado."<br>";
    }
}

    class P extends Cliente{

        public function p($p)
        {
           echo "p" .$p. "<br>";
        }


    }

    $pes = new P();
    $pes->p("hahaha");

?>