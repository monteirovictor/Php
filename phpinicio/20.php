<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form >
      <input type="text" name="nome" value=""><br><br>
      <input type="date" name="nascimento" value="" ><br><br>
      <button type="submit" name="button"></button>
    </form>

    <?php
    if (isset($_GET)) {
        foreach ($_GET as $key => $value) {
          echo "Nome do campo" .$key;
          echo "Valor do Campo" .$value;
          echo "<br>";
        }
    }
     ?>
    </body>
</html>
