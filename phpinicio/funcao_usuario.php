<?php

function ola(){

    echo "ola mundo <br>";
}


function ola2(){
    
    return "ola flamengo <br>";
}

echo ola();
echo ola2();

//qual a diferença de usar o return ou echo
// e pq o echo vc cria uma subrotina diferente do 
// return que faz ele ser reaproveitavel

$frase = ola2();
echo strlen($frase);

?>