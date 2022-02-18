<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TD_PHP/EXERCICE5/CSS/Style.css">
	<title>TP_JS</title>
</head>
<body>
<div class="container">
    <div class="container2">
        <div class="box">
        <h1>DISTANCE DUN POINT</h1>
        </div>
       

<div class="con">
<?php
 function point($x1,$x2,$y1,$y2){
    $d1=$x2-$x1;
    $d2=$y2-$y1;
     $d=sqrt(pow($d1,2)+pow($d2,2));
     return $d;
    }

$x1=rand();
$x2=rand();
$y1=rand();
$y2=rand();
$p=point($x1,$x2,$y1,$y2);
echo "Distance=".$p;
        ?>

</div>
        

        <div class="a">
            <button> <a href="../EXERCICE3/index.html.php"> EXO4</a> </button>
            <button> <a href="../EXERCICE6/index.html.php"> EXO6 </a> </button>
           </div>
       </body>
       
    </div>

</div>



    
<script>


</script>
</body>
</html>