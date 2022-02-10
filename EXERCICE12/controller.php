<?php

include_once'fonctions.php';
if (isset($_POST['valider'])) {
$number=$_POST['lang'];
}
afficheMois($number);
?>