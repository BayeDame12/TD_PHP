<?php
function somme($x,$y){
$somme=$x+$y;
return $somme;  
}


function difference($x,$y){
    $difference=$x-$y;
    return $difference;  
    }

    function modul($x,$y){
        $modul=($x % $y);
        return $modul;  
        }


        function carre($x,$y){
            $car=($x*$x);
            echo"\n";
            echo"carre de ".$x."=".$car;
            echo"\n";
            $ar=($y*$y);
            echo"carre de ".$y."=".$ar;
             
            }
    





        
    function produit($x,$y){
        $produit=$x*$y;
        return $produit;  
        }  

        function exponen($x,$y){
            $expo=$x**$y;
            return $expo;  
            }  
        
        function division($x,$y){
    if ($y!=0) {
    # code...
    $division=$x/$y;
    return $division;  
    }
    else {
    # code...
    echo"impossible de diviser un nombre par 0";
}

        }      
?>