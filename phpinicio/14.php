<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $idadeAtual=23;
    $idadeMenor=10;
    $idadeJovem=18;
    $idadeMaior=65;

    if ($idadeMenor>$idadeAtual) {
      echo $idadeMenor;
    }else {
      echo $idadeAtual;
    }else ($idadeAtual>$idadeMaior) {
      echo $idadeAtual;
    }else {
      echo $idadeMaior;
    }
     ?>

  </body>
</html>
