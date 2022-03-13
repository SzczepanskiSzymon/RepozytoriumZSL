<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rejestracja</title>
  </head>
  <body>
    <?php
      if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      }
     ?>
    <h3>Formularz rejestracji</h3>
    <form action="./scripts/login.php" method="post">
      <input type="email" name="email1" placeholder="Podaj adres poczty elektronicznej"><br><br>
      <input type="password" name="pass1" placeholder="Podaj hasło"><br><br>
      <input type="submit" value="Zaloguj się">
    </form>
<p>Nie masz konta? <a href="index.php">Zarejestruj się</a></p>
  </body>
</html>
