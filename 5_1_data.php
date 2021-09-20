<!DOCTYPE html>
<html>
<head>
    <head> <meta charset="utf-8">
</head>
<boy>
    <?php
    
    if (!empty($_GET['name']) && !empty($_GET['narodowosc']) && !empty($_GET['wiek']) ){
$test=ucfirst(strtolower($_GET['name']));
$testo=ucfirst(strtolower($_GET['narodowosc']));
echo <<< E
imię: $test  <br>
narodowość: $testo <br>
Wiek: $_GET[wiek] lat
E; 
}   
else{
echo 'wypełnij wszytkie pola';
}
?>
</body>
</html>
