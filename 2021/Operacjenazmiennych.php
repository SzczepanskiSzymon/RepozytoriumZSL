<?php
echo PHP_VERSION;
echo "<br>";
echo 2**10,"<br>";

$x=10;
$y=1;
echo $x<=>$y;
//równe / identyczne
$x=1;
$y=1.0;
echo "<br>";
echo gettype($x);
echo "<br>";
echo gettype($y);
echo "<br>";
if($x==$y){
    echo "równe";
}
else{
    echo "różne";
};
echo "<br>";
if($x===$y){
    echo "identycze";
}
else{
    echo "różne";
};




?>