<?php
function text(){
  return "test";
}
function name($name){
  return $name;
}
// zamienia pierwszą literę na dużą, pozostałe małe, usunie białe znaki
function validateString($string, $length){
return substr(ucfirst(strtolower(trim($string))), 0, $length);


}

 ?>
