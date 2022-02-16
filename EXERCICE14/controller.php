<?php
session_start();
    include'fonctions.php';
    
    if (isset($_POST['valide'])){
        $num=$_POST['texte'];
    
     testsaisi($num);
    }

?>