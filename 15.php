<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


      $diaSemana = date('w');

      switch ($diaSemana) {
          case 0:
          echo "Domingo";
          break;

          case 1:
          echo "segunda";
          break;

          case 2:
          echo "terça";
          break;

          case 3:
          echo "quarta";
          break;

          case 4:
          echo "quinta";
          break;

          case 5:
          echo "sexta";
          break;

          case 6:
          echo "sabado";
          break;
                   // code...

      }




     ?>
  </body>
</html>
