<?php

function soma(int...$valores){
    return array_sum($valores);
}

echo soma(2,10);

echo "<br>";

//os parametros serao inteiros;
// os soma chama os valores ;
?>


<?php

function soma2(int...$valores):float{
    return array_sum($valores);
}

echo var_dump(soma2(2,10));

//os parametros serao inteiros;
// os soma chama os valores ;
?>