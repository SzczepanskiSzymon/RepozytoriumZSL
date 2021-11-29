<?php
if (!empty($_POST)) {
  foreach ($_POST as $key => $value) {
    //echo "$key: $value<br>";
    if (empty($value)) {
      //echo "<script>history.back()<script>";
      header('location:../4_db_selet_table_delete.php?error=wypełnij wszystkie pola!&addUser=');
      exit();
    }

  }
  require_once('../scripts/connect.php');
  $sql="INSERT INTO `users`(`id`, `name`, `surename`, `bithdate`, `city_id`, `crdate`) VALUES (NULL, '$_POST[name]', '$_POST[surename]', '$_POST[bithdate]', '$_POST[city_id]', current_timestamp());";
  $connect->query($sql);
  if ($connect->affected_rows) {
    header('location:../4_db_selet_table_delete.php?error=prawidłowo dodano użytkownika');
    header('location:../4_db_selet_table_delete.php?error=nie dodano użytkownika');}
} ?>
