<?php
include 'coterand.php';
 $s=affichesurface(rand(1,10));
 echo"****************************FONCTION SURFACE********************************"."<br>";
 echo"\n";
 echo $s ;
 echo"\n";

 echo"****************************FONCTION PERIMETRE********************************"."<br>";

 $P=perimetre(rand(1,10));
 echo"\n";
 echo $P;
 echo"\n";


 $d=diagonalise(rand(1,10));
 echo"\n";
 echo $d;
 echo"\n"; echo"****************************FONCTION DIAGONALE********************************"."<br>";


?>