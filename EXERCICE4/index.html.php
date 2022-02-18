<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TD_PHP/EXERCICE4/CSS/Style.css">
	<title>TP_JS</title>
</head>
<body>
<div class="container">
    <div class="container2">
        <div class="box">
        <h1>PERMUTATION</h1>
        </div>
       

<div class="con">
<?php
 

function permutation($x, $y) {
    echo"************AVANT PERMUTATION**********"."<br>";
    echo $x."<br>";
    echo $y."<br>";  
    $tmp=$x;
    $x=$y;
    $y=$tmp;

echo""."<br>";
echo"*************APRES PERMUTATION**************"."<br>";
echo $x."<br>";
echo $y;

}
  


 $num=rand();
 $num1=rand();
 permutation($num,$num1);
        ?>

</div>
        

        <div class="a">
            <button> <a href="../EXERCICE3/index.html.php"> EXO3</a> </button>
            <button> <a href="../EXERCICE5/index.html.php"> EXO5 </a> </button>
           </div>
       </body>
       
    </div>

</div>



    
<script>


</script>
</body>
</html>