<!DOCTYPE html>
<html>
<head>
    <head> <meta charset="utf-8">
</head>
<body>
  <form method="post">
    <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
    <input type="text" name="sideB" placeholder="Podaj bok b">
    <input type="submit" value="oblicz">
  </form>

    <?php
    if (!empty($_POST['sideA']) && !empty($_POST['sideB'])) {
    $sideA=$_POST['sideA'];
    $sideB=$_POST['sideB'];
    $area=$sideA*$sideB;
    $circuit=2*$sideA+2*$sideB;

    echo <<< RESULT
    <hr>
    Pole kwadratu wynosi: $area cm<sup>2 <br>
    obwód kwadratu wynosi: $circuit  cm
    RESULT;
    }
else {
  echo 'wypełnij wszytkie pola';
}

?>
</body>
</html>
