
<?php
if (!empty($_POST['name'])) {
  require_once '../functions/function.php';
  //echo text();
  echo "imię: ".name($_POST['name']).'<hr>';

  //echo $_POST['name'];
  echo validateString($_POST['name'], 10);
}
 ?>
