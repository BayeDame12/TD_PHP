<?php
 include 'longlar.php';

$s=surface(rand(10,20),rand(10,20),);
echo"****************************FONCTION SURFACE********************************"."<br>";
echo"\n";
echo $s;
echo"\n";
echo"****************************FONCTION PERIMETRE********************************"."<br>";
echo"\n";
$s=perimetre(rand(10,20),rand(10,20),);
echo $s;
echo"\n";
echo"****************************FONCTION DIAGONALE********************************"."<br>";
$d=diagonale(rand(10,20),rand(10,20),);
echo"\n"; 

 echo"\n";
 echo $d;
 echo"\n";

?>