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

//postinkrementacja $x++
//preinkrementacja ++$x
//postinkrementacja $x--
//preinkrementacja --$x
$x=2;
echo "<hr>$x"; //2
echo ++$x; //3
echo $x++; //3
echo ++$x; //5

$x=1;
echo $x;//1
$x=$x++;
echo $x;//1
$x= ++$x;
echo $x;//2
$y= ++$x;
echo $x;//3
echo $y;//3
$y=$x++;
echo $x;//4
echo "$y<br>";//3



?>