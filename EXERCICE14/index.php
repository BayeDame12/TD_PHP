<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>exercice13</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="CSS/Style.css" rel="stylesheet">
    </head>
    <body>
    
    <form class="prem" action="controller.php" method="POST">
        <div class="form">
        <label for="text">REMPLIR DES NUMERO TELEPHONE</label>
        <textarea name="texte"></textarea>
        <input type="submit" name="valide">

        
       
        </div>
        
   <div class="form1"> 
   <span style="background-color:rgb(255, 128, 128) ;" >
       <?php 
        if (isset($_GET['msg'])) {
            # code...
            echo $_GET['msg'];
        } elseif ($_GET['msg1']) {
            # code...
            echo $_GET['msg1'];
        }
         
        elseif($_GET['msg3']) {
            # code...
            echo $_GET['msg3'];
        }
        
        ?>
       </span>
        <label for="text" >NUMERO VALIDE</label>
         <textarea readonly>
         <?php
           session_start();
           foreach (  $_SESSION['tout']['bonnumero'] as $key => $value){
               print_r($value)."<br>";
               $_SESSION['tout']=null;
              
           } 
        ?>

         </textarea>
         
        <label for="text">NUMERO INVALIDE</label>
        <textarea readonly>
        <?php
           session_start();
           foreach (  $_SESSION['tout']['nonumero'] as $key => $value){
               print_r($value)."<br>";
               $_SESSION['tout']=null;
              
           } 
        ?>
            
        </textarea></div>  
   </div>
       
   <div class="form2" >
    <label for="text">NOMBRE DE NUMERO DES OPERATEUR</label>
        <textarea readonly></textarea>
   </div>
       
    </form>

    </body>
</html>