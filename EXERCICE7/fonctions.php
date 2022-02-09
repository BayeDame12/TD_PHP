<?php

if (isset($_POST['valider'])) {


    session_start();
    $_SESSION['jours']=$_POST['jours'];
    $_SESSION['mois']=$_POST['mois'];
    $_SESSION['annees']=$_POST['annees'];

    # code...
}



    ?>



