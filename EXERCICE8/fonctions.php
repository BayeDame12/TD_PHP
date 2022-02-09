<?php
function saisi(){
 
if (isset($_POST['valider'])){
        # code...
        if (isset($_POST['num1']) && (!empty($_POST['num1']))) {
            # code...
            for($i=1;$i<=($_POST['num1']);$i++){
              
        
                

                
                 ?>
                 <ul>
                     <li> <?php echo $i.'<br>';   ?></li>
                 </ul>
                

                 <?php

                

                
              
            }
    
        }
        else {
            
            header("location:index.php");
        }
    }
}
