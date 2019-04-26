<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Estudos</title>
  </head>
  <body>
  <?php

      //variaveis pré-definidas
      // variaveis de ambientes superglobais

      $nome= $_GET["a"];
    //  $nome= $_GET["b"];
      var_dump($nome);
      $ip=$_SERVER["REMOTE_ADDR"];
      echo $ip;

   ?>
  </body>
</html>
