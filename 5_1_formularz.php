<!DOCTYPE html>
<html>
<head>
    <head> <meta charset="utf-8">
<title>Formularze</title>

</head>
<body>
    <h3>Dane użytkownika</h3>
<form action="5_1_data.php"> 
<input type='text' name="name" placeholder="podaj imię"><br><br>
<input type='text' name="narodowosc" placeholder="podaj narodowość"><br><br>
<input type="number" name="wiek" placeholder="podaj swój wiek"><br><br>
<input type='submit' value="Zatwierdź dane"><br><break>


</form>
    <?php
    //get jest szybszy ale mniej bezpieczny | 
//Post jest wolniejszy ale bezpieczniejszy i może pobrać więcej danych
    if (!empty($_GET['name']) && !empty($_GET['narodowosc']) && !empty($_GET['wiek']) ){

echo <<< E
imię: $_GET[name] <br>
narodowość: {$_GET['narodowosc']} <br>
wiek: $_GET[wiek]
E; 
}   
else{
echo 'wypełnij wszytkie pola';

};//isset sprawdza czy coś istnieje | !empty wymaga by coś istniało w polu 







?>


    
    <h3>Koniec strony</h3>
</body>


</html>