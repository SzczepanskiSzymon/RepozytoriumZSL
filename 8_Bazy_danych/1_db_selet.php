<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy </h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "zsl_3pi2tg2");
    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);

  while ($user = $result->fetch_assoc()) {
    echo <<<USER
    id: $user[id]<br>
    imię i nazwisko: $user[name] $user[surename]<br>
    Data urodzenia: $user[birthday]<br>
    Data utworzenia użytkownika: $user[create_date]<br>
    <hr>
    USER;
  }
    ?>
  </body>
</html>
