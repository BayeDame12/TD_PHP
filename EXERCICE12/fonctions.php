<?php
    function vide($langue):bool{
        return empty($langue);
    }
    function chaine($langue):bool{
        return is_numeric($langue);
    }
function controlSaisi($langue){
if (vide($langue)) {
    # code...
    $msg="veiller saisir le champs";
    header("location:index.php?msg=$msg");
} 
else if(chaine($langue)){
    # code...
    $msg1="veiller saisir une chaine svp!!";

    header("location:index.php?msg1=$msg1");

}

else {
    
    afficheMois($langue);
}
}

    function afficheMois($langue){
     
        $tab=[
         "francais"=>["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","descembre"],
         "anglais"=>["january","february","mars","april","mai","juin","juillet","august","september","october","november","descember"]
        ];
        if ($langue=="francais") {
            # code...
            foreach($tab["francais"] as $i){
              echo$i."<br>";
            }
           
            
        } elseif($langue=="anglais") {
            # code...
            foreach($tab["anglais"] as $i){
                echo$i."<br>";
              }

        }
        else {
            
            $msg3="choisi entre la langue francais ou englais uniquement!!";

           header("location:index.php?msg3=$msg3");
        }
    }
?>