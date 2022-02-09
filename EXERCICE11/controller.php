<?php
session_start();
include_once'fonctions.php';
if (isset($_POST['valider'])) {
$number=$_POST['num1'];
$_SESSION['error']=$_POST['num1'];
$tab=[];
control($number,"number",$tab);
    


}

?>