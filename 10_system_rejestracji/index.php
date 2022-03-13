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
    <form action="./scripts/register.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="email" name="email1" placeholder="Podaj adres poczty elektronicznej"><br><br>
      <input type="email" name="email2" placeholder="Powtórz adres poczty elektronicznej"><br><br>
      <input type="password" name="pass1" placeholder="Podaj hasło"><br><br>
      <input type="password" name="pass2" placeholder="Powtórz hasło"><br><br>
      <input type="date" name="birthday"> Data urodzenia<br><br>
      <input type="submit" value="Zarejestruj się">
    </form>
    <p>Już masz konto? <a href="inde.php">Zaloguj się</a></p>
  </body>
</html>
