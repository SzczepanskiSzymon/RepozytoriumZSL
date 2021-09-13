<?php 

echo 'zsł <br>';
echo 'zsł <hr>';
$name='janusz';
echo "imię: $name <br>";
//Kontatenacja
echo "janusz"." kowalski<br>";
//typy danych
//całkowity
$calkowita=10;
$bin=0b101; //5
$oct=011; //9
$hex=0x11; //17
echo $calkowita."<br>";
echo $bin."<br>";
echo $oct."<br>";
echo $hex."<br>";
//zmienno przecinkowy
$x=10.5;
//logiczny
$prawda = true;
$fałsz = false; //w nazwach zmiennych nie używa się polskich znaków 
echo $prawda."<br>";
echo $fałsz."<br>";
//składnia heredoc
$text = <<< E
Twoje imię: $name<br>
Poznań<br>
zsł<hr>


E;
echo $text;
//składnia nowdoc
echo <<< 'E'
Twoje imię: $name<br>
Poznań<br>
zsł<hr>


E;
$surname = 'nowak';
echo "\$name $surname";














?>