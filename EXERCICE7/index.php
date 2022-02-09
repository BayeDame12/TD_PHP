
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/Style.css">

  
</head>
<body>
  <form method="POST" action="controller.php">
      
    <label for="number">jours</label>
    <input
      type="text" name="jours" placeholder="veiller saisir le jours " value="<?php echo $jours?>"
    />
    <label for="number">mois</label>
    <input
      type="text" name="mois" placeholder="veiller saisir un mois " value="<?php echo $mois?>"
    />
    <label for="number">annee</label>
    <input
      type="text" name="annees" placeholder="veiller saisir l annees"  value="<?php echo $annees?>"
    />
    
    <input type="submit"  name="valider" value="valider" />
  
</form>
</body>
</html>