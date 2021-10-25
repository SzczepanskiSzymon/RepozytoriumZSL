<?php
function text(){
  return "test";
}
function name($name){
  return $name;
}
function nationality($nationality){
  return $nationality;
}
// zamienia pierwszą literę na dużą, pozostałe małe, usunie białe znaki
function validateString($string, $length, $color){
return substr(ucfirst(strtolower(trim($string))), 0, $length);


}

 ?>
