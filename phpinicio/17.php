<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    for ($i=date("y"); $i > date("y")-100 ; $i--) {
        echo $i. "<br>";
    }

     ?>
  </body>
</html>
