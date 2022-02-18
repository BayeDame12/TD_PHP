<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TD_PHP/EXERCICE1/CSS/Style.css">
	<title>TP_JS</title>
</head>
<body>
<div class="container">
    <div class="container2">
        <div class="box">
        <h1>RECTANGLE</h1>
        </div>
       

<div class="con">
<?php
$longueur=rand();
$largeur=rand();

function surface($longueur,$largeur){
echo ($longueur*$largeur);

}

function perimetre($longueur,$largeur){
    echo(($longueur+$largeur)*2);
    
    }
    function diagonale($longueur,$largeur){
        echo(sqrt(($longueur*$longueur) + ($largeur*$largeur)));
        }
        
    



           echo"Surface=";

           surface($longueur,$largeur);
           echo"<br>";
           echo"Périmetre=";
           perimetre($longueur,$largeur);
           echo"<br>";
           echo"Diagonale=";
           diagonale($longueur,$largeur);

        
        ?>

</div>
        

        <div class="a">
            <button> <a href="../EXERCICE1/index.html.php"> EXO1</a> </button>
            <button> <a href="../EXERCICE3/index.html.php"> EXO2 </a> </button>
           </div>
       </body>
       
    </div>

</div>



    
<script>


</script>
</body>
</html>