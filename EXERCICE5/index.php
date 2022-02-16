<?php
 include 'exo5.php';
 echo"****************************FONCTION DISTANCE DUN POINT********************************"."<br>";
 $x1=rand();
 $x2=rand();
 $y1=rand();
 $y2=rand();

 $d1=$x2-$x1;
 $d2=$y2-$y1;
$p=point($x1,$x2,$y1,$y2);
echo "Distance=".$p;

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
     <button> <a href="../EXERCICE4/index.php"> EXO4 </a> </button>
     <button> <a href="../EXERCICE6/exo6.html.php"> EXO6 </a> </button>
    </div>
     



    </body>
</html>