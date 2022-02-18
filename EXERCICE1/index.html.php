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
        <div class="box">
        <h1>CARRE</h1>
        </div>
        </div>
       

<div class="con">
<?php
$cote=rand();

        function affichesurface($cote){
         $surface=($cote * $cote);
         echo $surface;
        
        }
        
        function perimetre($cote){
            $perimetre=($cote * 4);
            echo $perimetre;
           
           }
           function diagonalise($cote){
            $diagonalise=sqrt($cote * $cote*2);
            echo $diagonalise;
           
           }  
           echo"Surface=";

           affichesurface($cote);
           echo"<br>";
           echo"Périmetre=";
           perimetre($cote);
           echo"<br>";
           echo"Diagonale=";
           diagonalise($cote);

        
        ?>

</div>
        

        <div class="a">
            <button> <a href="../index.html.php"> menu principal </a> </button>
            <button> <a href="../EXERCICE2/index.html.php"> EXO2 </a> </button>
           </div>
       </body>
       
    </div>

</div>



    
<script>


</script>
</body>
</html>