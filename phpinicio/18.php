<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <?php

          $meses = array("Janeiro" ,"fevereiro","março" );


          foreach ($meses as $key => $mes) {
            echo "Indice"  .$key."<br>";
            echo "o mês é:".$mes."<br><br>";
          }

         ?>
  </body>
</html>
