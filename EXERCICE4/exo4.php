<?php
function permut($x,$y){
  echo"***PERMUTAION DE DEUX VALEUR***"."<br>";
  echo"Avant permutation"."<br>";
  echo $x."<br>";
  echo $y."<br>";  
$tmp=$x;
$x=$y;
$y=$tmp;
echo""."<br>";
echo"Apres permut"."<br>";
echo $x."<br>";
echo $y;  

}

?>