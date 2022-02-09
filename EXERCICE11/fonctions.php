<?php

function saisi($n):bool{
return empty($n);
}

function contrnum($n):bool{
    return is_numeric($n);
    }
    
function control($n,string $key,array $tab){

    if (saisi($n)) {
        # code...
        $tab="veiller saisir une valeur \n";
    }
    elseif(!contrnum($n)){
        $tab="veiller saisir une valeur numerique";
    }
}
?>