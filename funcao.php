<?php

    $a=10;

    function troca(&$a){

        // com o & comercial ha a passagem de referencia 
        // diferente se nao tivesse o & comercial 

        // com o & comercial ficaria 100 


        $a+=90;
        return $a;
    }

    echo troca($a);

    echo "<br>";

    echo $a;

?>