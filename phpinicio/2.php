<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $nome= "victor";

    function teste(){
      global $nome;
      echo "$nome";
    }
function teste2(){
    global $nome;
    echo "$nome". " é amazing";

}
    teste();
    teste2();
     ?>
  </body>
</html>
