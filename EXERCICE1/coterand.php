

<?php
function affichesurface($cote){
 $surface=($cote * $cote);
 return $surface;

}

function perimetre($cote){
    $perimetre=($cote * 4);
    return $perimetre;
   
   }
   function diagonalise($cote){
    $diagonalise=sqrt($cote * $cote*2);
    return $diagonalise;
   
   }  

?>