
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>

    <?php
      if (!isset($_POST['person'])  && !isset($_POST['buttonAvg'])  ) {
        echo <<< FORMCOUNTPERSON
        <h3>Ilość osób w rodzinie</h3>
        <form method="POST">
        <input type="number" name="person" placeholder="podaj ilość osób w rodzinie"> <br> <br>
        <input type="submit" value="click">
          </form>
        FORMCOUNTPERSON;
      }

     ?>

      <?php
        if (!empty($_POST['person'])) {
          echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";

          echo <<<wiek
              <form method="POST">

          wiek;

          for ($i=1; $i <= $_POST['person']; $i++ ) {
            echo "<input type=\"number\" name=\"age$i\" placeholder=\"podaj wiek $i\"><br><br>";

          }
          echo '<input type="submit" name="buttonAvg" value="click">';
          echo <<< FORMAGEPERSON
          </form>
          FORMAGEPERSON;
        }

        if (isset($_POST['buttonAvg'])) {
            //print_r($_POST);
            $ageAvg= 0;

            foreach ($_POST as $key => $value) {
              if ($key != 'buttonAvg') {
                  echo "$key: $value <br>";

                  $ageAvg=$ageAvg+$value;


              }

            }
            echo number_format($ageAvg, 2)."<br>";
            echo "<a href=\"sredniwiek.php\">powrót</a>";


          }

//dodać zaokrąglenie do 2 miejsc po przycinku (number_format) i hipełącze do 1 formularza(header('location: '))

      ?>
  </body>
</html>
