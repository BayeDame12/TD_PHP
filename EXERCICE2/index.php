<?php
 include 'longlar.php';

$num=rand(10,20);
$num1=rand(10,20);
$s=surface($num,$num1);
echo"*****LES DIMENTION POUR LE RECTANGLE*******"."<br>";
echo"surface=".$s."<br>";
$s=perimetre($num,$num1);
echo"perimetre=".$s."<br>";
$d=diagonale($num,$num1);
 echo"diagonale=".$d."<br>";

 
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
     <button> <a href="../EXERCICE1/index.php"> EXO1 </a> </button>
     <button> <a href="../EXERCICE3/index.php"> EXO3 </a> </button>
    </div>
     



    </body>
</html>