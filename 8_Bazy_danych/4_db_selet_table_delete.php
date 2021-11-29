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
    if (isset($_GET['error'])) {
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
  if (isset($_GET['addUser'])) {
    echo <<< FORMADDUSER
    <h4>Dodawanie użytkownika</h4>

    FORMADDUSER;
  }
  else{
  echo '<a href="./4_db_selet_table_delete.php?addUser=">Dodaj użytkownika</a>';}
    ?>
    <form action="../scripts/add_user.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surename" placeholder="Podaj nazwisko"><br><br>
      <input type="date" name="bithdate" >Podaj datę urodzenia<br><br>
      <input type="text" name="city_id" placeholder="Podaj id miasta"><br><br>
      <input type="submit" value="Dodaj użytkownika">

    </form>

  </body>
</html>
