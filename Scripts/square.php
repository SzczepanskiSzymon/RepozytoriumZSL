<!DOCTYPE html>
<html>
<head>
    <head> <meta charset="utf-8">
</head>
<body>
  <h1>Kwadrat</h1>
  <form method="post">
    <input type="text" name="sideA" placeholder="Podaj bok a">
    <input type="submit" value="oblicz">
  </form>

    <?php
    if (!empty($_POST['sideA'])) {
    $sideA=$_POST['sideA'];
    $area=pow($sideA, 2);
    $circuit=4*$sideA;

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
