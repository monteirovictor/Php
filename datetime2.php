<?php

$datinha = new DateTime();
$periodo = new DateInterval("P15D");
echo $datinha->format("d/m/y");
echo "<br>";
$datinha->add($periodo);
echo $datinha->format("d/m/y");


?>