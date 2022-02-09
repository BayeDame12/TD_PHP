<?php

function saisi(){
 
 if (isset($_POST['valider'])){
         # code...
         if (isset($_POST['num1']) && (!empty($_POST['num1'])) && ($_POST['num1']>10000)) {
             # code...
             nombrepremiere($_POST['num1']);
        }
        
        else {
            header("location:index.php");
        }
        
        
        }
    }
?>

<?php
function nombrepremiere($nombre):bool{
    $cpt=1;
    for($i=2;$i<=intval($nombre/2);$i++){
        if ($nombre%$i==0) {
            $cpt++;
        }
    }
     
     if ($cpt>1){
        return false;
    }
    return true;
}
?> 

