


<?php
 function saisi($num):void {
if(empty($num)){
header("location:index.php");
}
else if(!is_numeric($num)){
    header("location:index.php");
}
 else {
     
    for ($i=0; $i <$num; $i++) { 
       
        # code...
      echo '<input type="text" name="num1"  placeholder="veiller saisir un nombre"/>'."<br>";
    
        
    }
 }
}
?>

