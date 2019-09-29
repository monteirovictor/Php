<?php


interface Pessoa{

    public function Nome($nome);
    public function Logradouro($logradouro);
    public function Cidade($cidade);
    public function Estado($estado);

}

class Cliente implements Pessoa{

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

        // Constructor Method

    $cliente = new Cliente();

    $cliente->Nome("Victor Rangel Monteiro Maia");
    $cliente->Logradouro("Rua Jose de Oliveira");
    $cliente->Cidade("Macae");
    $cliente->Estado("RJ");
?>
