<?php
session_start();
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $_SESSION['error'] = "Wypełnij wszystkie pola np. $key";
      echo "<script>history.back();</script>";
      exit();
    }
  }
  require_once './connect.php';

  $myemail = mysqli_real_escape_string($conn,$_POST['email1']);
     $mypassword =  mysqli_real_escape_string($conn,$_POST['pass1'],);
//Niestety musiałem usunąć hasha bo z hashem nie chciało mi działać nawet z password_verify
    $sql = "select *from users where email = '$myemail' and password = '$mypassword'";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
       $count = mysqli_num_rows($result);

       if($count == 1){
           header('location: ../welcome.php');
       }
       else{
           $_SESSION['error'] = "Nie poprawne dane logowania";
           $error=1;
       }
       if ($error != 0) {
         echo "<script>history.back();</script>";
         exit();
       }
 ?>
