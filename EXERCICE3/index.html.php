<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TD_PHP/EXERCICE3/CSS/Style.css">
	<title>TP_JS</title>
</head>
<body>
<div class="container">
    <div class="container2">
        <div class="box">
        <h1>CALCULE SOMME PRODUIT DIFFERENCE ETC...</h1>
        </div>
       

<div class="con">
<?php
function somme($x,$y){
    echo $x+$y;
    }
    function produit($x,$y){
        echo $x*$y;
        } 
    
    function difference($x,$y){
        echo $x-$y;
        
        }
        function exponen($x,$y){
            echo $x**$y;
            }
    
        function modul($x,$y){
            echo($x % $y);
  
            }
            function division($x,$y){
                echo $x/$y;
                }
    
    
                
                 
                
$num=rand(10,20);
$num1=rand(10,20);
echo"Somme=";
echo somme($num,$num1)."<br>";

echo"Produit=";
echo produit($num,$num1)."<br>";


echo"Exponentielle=";
echo exponen($num,$num1)."<br>";



echo"Difference=";
echo difference($num,$num1)."<br>";

echo"modul=";
echo modul($num,$num1)."<br>";

echo"Division=";
echo division($num,$num1)."<br>";

        
        ?>

</div>
        

        <div class="a">
            <button> <a href="../EXERCICE2/index.html.php"> EXO2</a> </button>
            <button> <a href="../EXERCICE4/index.html.php"> EXO4 </a> </button>
           </div>
       </body>
       
    </div>

</div>



    
<script>


</script>
</body>
</html>