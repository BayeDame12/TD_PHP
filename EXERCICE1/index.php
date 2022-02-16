<?php
include 'coterand.php';
$nombre=$nombre=rand(1,10);
echo"***SURFACE PERIMETRE ET DIAGONALE DUCARRE***"."<br>";
 $s=affichesurface($nombre);
 echo"surface=".$s."<br>";
 
 $P=perimetre($nombre);
 echo"perimetre=".$P."<br>";
 
 $d=diagonalise($nombre);
 echo "diagonale=".$d."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../ccss.css/Style.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="a">
     <button> <a href="../index.html.php"> menu principal </a> </button>
     <button> <a href="../EXERCICE2/index.php"> EXO2 </a> </button>
    </div>
</body>
</html>