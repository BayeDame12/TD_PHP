<?php

include_once'fonctions.php';
if (isset($_POST['valider'])) {
$number=$_POST['num1'];
}
controlSaisi($number);
?>