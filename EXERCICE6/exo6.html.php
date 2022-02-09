
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/Style.css">
</head>
<body>
 <!-- form ation="localhost port" -->
  <form  action="controller.php" method="POST">
  
     <h1>aX2+bX+c=0</h1> 
    
    <label for="number">NOMBRE A</label>
    <input type="text" name="num1" placeholder="veiller saisir un nombre"
    />
    <!-- <span>ERREUR</span> -->
    <label for="number">NOMBRE B</label>
    <input type="text" name="num2" placeholder="veiller saisir un nombre"
    />
    <!-- <span>ERREUR</span> -->
    <label for="number">NOMBRE C</label>
    <input type="text" name="num3"placeholder="veiller saisir un nombre"
    />
    <!-- <span>ERREUR</span> -->
    <br>
    <input type="submit"  name="valider" />
    
</form>


</body>
</html>