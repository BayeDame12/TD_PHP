<?php
 include 'exo3.php';
 $num=rand(10,20);
 $num1=rand(10,20);
 echo"calcule de la SOMME PRODUIT EXPONENTIEL DIFFERENCE MODULO DIVISION"."<br>";
$som=somme($num,$num1);
echo"Somme=".$som."<br>";

$prod=produit($num,$num1);

echo"produit=".$prod."<br>";

$expo=exponen($num,$num1);

echo"l exponentiel=".$expo."<br>";


$diff=difference($num,$num1);
echo"difference=".$diff."<br>";

$modul=modul($num,$num1);
echo"modulo=".$modul."<br>";
$divi=division($num,$num1);
echo"division=".$divi."<br>";

?>
!<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="../ccss.css/Style.css" rel="stylesheet">

    </head>
    <body>
    <div class="a">
     <button> <a href="../EXERCICE2/index.php"> EXO2 </a> </button>
     <button> <a href="../EXERCICE4/index.php"> EXO4 </a> </button>
    </div>
     



    </body>
</html>