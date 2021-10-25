<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h3>Dane z formularza:</h3>

<?php

  require_once '../functions/function.php';
echo $_POST['name'];
  echo '<hr>';
  if (!empty($_POST['name']) && !empty($_POST['color']) && !empty($_POST['nationality'])) {
    $color=$_POST['color'];
    echo "<div style=\"color: $color\">";
    echo $_POST['color']."<br>";
    echo "imię bez poprawy: ".$_POST['name'].", długośc: ".strlen($_POST['name'])."<br>";
    echo validateString($_POST['name'], 10, $_POST['color'])." długość:
    ".strlen(validateString($_POST['name'], 10, $_POST['color']))."<br>"."<br>";

    echo "narodowość bez poprawy: ".$_POST['nationality'].", długośc: ".strlen($_POST['nationality'])."<br>";
    echo validateString($_POST['nationality'], 10, $_POST['color'])." długość:
    ".strlen(validateString($_POST['nationality'], 10, $_POST['color']))."</div>";
  }




 ?>

</div>
</body>
</html>
