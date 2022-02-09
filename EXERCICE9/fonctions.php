
<?php


        

function testval($a){

    if(isset($_POST['valider'])){
    
         if(!empty($a)){
              if(intval($a)){
               for($i=1;$i<=12; $i++){
                   
            
            echo $a."*".$i."=". $a*$i."<br>";
                     
        }
            }
            else{
    
                header("location:formulaire()");
        
            }
            
    
         
        }
        else {
            # code...
            header("location:formulaire()");
        }
    
    
    
    }

   
}  
?>


    <html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/Style.css">
</head>
<body>
 <!-- form ation="localhost port" -->
  <form  action="controller.php" method="POST">
  
     <h1>SAISIE D'UN NOMBRE</h1>
    
    <label for="number">veillez saisir un nombre </label>
    <input type="text" name="num1" placeholder="veiller saisir un nombre"/>
    <br>
    <input type="submit"  name="valider" />
    
</form>
</body>
</html>


