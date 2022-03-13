<?php
session_start();
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $_SESSION['error'] = "Wypełnij wszystkie pola np. $key";
      echo "<script>history.back();</script>";
      exit();
    }
  }

  $error=0;
  if ($_POST['pass1'] != $_POST['pass2']) {
    $_SESSION['error'] = "Hasła są różne!";
    $error=1;
  }

  if ($_POST['email1'] != $_POST['email2']) {
    $_SESSION['error'] = "Adresy email są różne!";
    $error=1;
  }

  if ($error != 0) {
    echo "<script>history.back();</script>";
    exit();
  }

  //$pass = password_hash($_POST['pass1'], PASSWORD_ARGON2ID);
  $city=1;

  require_once './connect.php';
  $stmt = $conn->prepare("INSERT INTO users(cityid, email, name, surname, birthday, password) VALUES (?,?,?,?,?,?)");
  $stmt->bind_param("ssssss", $city, $_POST['email1'], $_POST['name'], $_POST['surname'], $_POST['birthday'], $_POST['pass1']);
  $stmt->execute();

  if ($conn->affected_rows != -1) {
    $_SESSION['error'] = "Prawidłowo dodano nowego użytkownika: $_POST[email1]";
  }else {
    $_SESSION['error'] = "Nie udało się dodać użytkownika";
  }

  header('location: ../');

  // ex. dodaj miasto w liście rozwijanej (miasto pobierz z tabeli citi)
 ?>
