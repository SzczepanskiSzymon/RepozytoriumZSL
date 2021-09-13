<!DOCTYPE html>
<html>
<head>
    <head> <meta charset="utf-8">


</head>
<body>
    <h3>Początek strony</h3>
    <?php
    include './3_pliku.php'; //dołącza dodatkowy plik do pliku
    include_once './3_pliku.php'; //wyświetla plik raz
    include_once './3_pas.php'; //wyswietla error ale nadal wyświetla plik
    require './pas.php';
    require_once './3_pas.php'; //wyswietla error i nie wyświetla reszty pliku



    ?>
    <h3>Koniec strony</h3>
</body>


</html>