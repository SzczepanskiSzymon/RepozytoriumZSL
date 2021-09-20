<!DOCTYPE html>
<html>
<head>
    <head> <meta charset="utf-8">
<title>Formularze</title>

</head>
<body>
    <h3>Dane użytkownika</h3>
<form> 
<input type='text' name="name" placeholder="podaj imię"><br><br>
<input type='text' name="surname" placeholder="podaj nazwisko"><br><br>
<input type="color" name="color" placeholder="podaj swój uubiony kolor"><br><br>
<input type='submit' value="Zatwierdź dane"><br><break>


</form>
    <?php
    //get jest szybszy ale mniej bezpieczny | 
//Post jest wolniejszy ale bezpieczniejszy i może pobrać więcej danych
    if (!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['color']) ){

echo <<< E
imię i nazwisko: $_GET[name] {$_GET['surname']} $_GET[color]
E; // albo musi być w cudzysłowiu albo bez apostrofów
}   
else{
echo 'wypełnij wszytkie pola';

};//isset sprawdza czy coś istnieje | !empty wymaga by coś istniało w polu 







?>


    
    <h3>Koniec strony</h3>
</body>


</html>