<?php 
$text = <<< T
ZSŁ - Zespół
Szkół
Łączności
T;
echo $text.'<br>';
echo nl2br($text); // wyświetla text z <<< T z wcięciami 
echo '<hr>';
$name= "janUSz" ; 
echo strtolower($name)."<br>";//zmiana na małe litery
echo strtoupper($name)."<br>";//zmiana na duże litery

$data="janUSz koWAlsKI";
//zamiana pierwszej litery na dużą
echo ucfirst($data)."<br>";
//zamiana piewszych liter na duże w każdym słowie
echo ucwords($data)."<br>";
$lorem = <<< E
Lorem ipsum dolor sit amet,
consectetur adipisicing elit.
Est laboriosam id sapiente ipsa corrupti, 
magni assumenda voluptates, repellat incidunt
voluptatem architecto quidem amet et
perspiciatis esse cumque mollitia ut! Tenetur.
E;
echo "<hr>$lorem<hr>";
$col=wordwrap($lorem,30, "<br>"); //po każdych 30 znakach dodaje text w 3 
//części wordwrapa (zmienna,co ile znaków, co ma wpisać)
echo $col;

//czyszczenie zawartości buffora
ob_clean();
//usuwanie białych znaków {(spacje, tab, itd)}
$name="janusz";
$name1=" janusz  ";
echo "długość .\$name ".strlen($name)."<br>";
echo "długość .\$name1 ".strlen($name1)."<br>";

echo "długość .\$name1 ".strlen(ltrim($name1))."<br>"; //8 usuwa znaki z lewj strony
echo "długość .\$name1 ".strlen(rtrim($name1))."<br>"; //7 usuwa znaki z prawej storny
echo "długość .\$name1 ".strlen(trim($name1))."<br>"; //6 usuwa znaki
//przeszukiwanie ciągów znaków
echo strstr("janusz@gmail.com","@");//wszukuje @
echo strstr("janusz@gmail.com","G");//Wyszukuje G, jest wrażliwe na duże / małe litery
echo stristr("janusz@gmail.com","G");// nie patrzy na duże/małe litery
//substr
$name="Janusz";
echo substr($name, 2); //nusz
echo substr($name, 2,3);
echo substr($name, -2);
echo substr($name, -2,1);
?>