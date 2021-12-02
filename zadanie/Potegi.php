<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>POTĘGOWANIE</h4>
    <form action="Potegi.php" method="post">
      Podaj podstawę potęgi<input type="number" name="l1" ><br><br>
      Podaj całkowity, dodatni wykładnik potęgi<input type="number" name="l2" ><br><br>
      <input type="submit"  value="POTĘGOWANIE"><br><br>
    </form>
    <?php
    $a=$_POST['l1'];
    $b=$_POST['l2'];
    echo a+b;
     ?>
  </body>
</html>
