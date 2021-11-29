<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy </h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "zsl_3pi2tg2");
    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);
    if (isset($GET['error'])) {
      echo $_GET['error'];
    }
    echo <<<TABLE
    <table>
      <tr>
        <th>id</th>
        <th>imię</th>
        <th>nazwisko</th>
        <th>data urodzenia</th>
        <th>data utworzenia użytkownika</th>
      </tr>

    TABLE;
  while ($user = $result->fetch_assoc()) {
    echo <<<USER
    <tr>
    <td>$user[id]</td>
    <td>$user[name]</td>
    <td>$user[surename]</td>
    <td>$user[bithdate]</td>
    <td>$user[crdate]</td>
    <td><a href="../scripts/delete_user.php?deleteUser=$user[id]">usuń</a></td>
    </tr>

    USER;
  }
  echo "</table>";
    ?>

  </body>
</html>
