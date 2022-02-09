<?php
 include 'exo3.php';

$som=somme(rand(),rand());
echo"****************************FONCTION SOMME********************************"."<br>";
echo"\n";
echo $som;
echo"\n";


$prod=produit(rand(),rand());
echo"****************************FONCTION PRODUIT********************************"."<br>";
echo"\n";
echo $prod;
echo"\n";

$expo=exponen(rand(1,20),rand(2,30));
echo"****************************FONCTION EXPONENTIELLE********************************"."<br>";
echo"\n";
echo $expo;
echo"\n";

$diff=difference(rand(),rand());
echo"****************************FONCTION DIFFERENCE********************************"."<br>";
echo"\n";
echo $diff;
echo"\n";

$modul=modul(rand(),rand());
echo"****************************FONCTION MODULO********************************"."<br>";
echo"\n";
echo $modul;
echo"\n";

echo"****************************FONCTION CARRE********************************"."<br>";
carre(rand(),rand());
echo"\n";

$divi=division(rand(),rand());
echo"****************************FONCTION DIVISION********************************"."<br>";
echo"\n";
echo $divi;
echo"\n";



?>