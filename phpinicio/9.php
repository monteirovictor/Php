<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $nome = "victor";
    echo "<br>";
    echo strtoupper($nome);
    echo "<br>";
    $nome2="BORIS";
    echo strtolower($nome2);
    echo "<br>";
    echo ucwords($nome);

    $texto = "Uma vez flamengo sempre flamengo";

    $q = strpos($texto,"flamengo");

    $texto1 =substr($texto,0,$q);

    var_dump($texto1);






     ?>
  </body>
</html>
