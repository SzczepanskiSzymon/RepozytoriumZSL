
  <?php
  if (!empty($_GET['deleteUser'])) {
    //echo $_GET['deleteUser'];
    require_once './connect.php';
    $sql=" DELETE FROM `users` WHERE `users`.`id` = $_GET[deleteUser]";
    $connect->query($sql);
    if ($connect->affected_rows) {
      header("location: ../3_db_selet_table_delete.php?error=prawidłowo Usunięto record o id=$_GET[deleteUser]");
    }
    else {
      header("location: ../3_db_selet_table_delete.php?error=nie usunięto recordu o id=$_GET[deleteUser]");
    }
  }
  else {
    header('location: ../3_db_selet_table_delete.php');
  }
   ?>
