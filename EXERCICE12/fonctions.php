<?php
    function afficheMois($langue){
     
        $tab=[
         "francais"=>["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","descembre"],
         "anglais"=>["january","february","mars","april","mai","juin","juillet","august","september","october","november","descember"]
        ];
        if ($langue=="francais") {
            # code...

            $prem=$tab["francais"];
            echo"<table border=10 width=100>";
            foreach($prem as $i=> $d){
            if($i%4==0){
             echo "<tr>";
            }
            
            echo "<td>".$d."</td>";
            if(($i+1)%4==0){
            echo"</tr>";   
            }
            }
            echo"</>"; 



              
        } elseif($langue=="anglais") {
            # code...
            $prem=$tab["anglais"];
            echo"<table border=10 width=100>";
            foreach($prem as $i=> $d){
            if($i%4==0){
             echo "<tr>";
            }
            
            echo "<td>".$d."</td>";
            if(($i+1)%4==0){
            echo"</tr>";   
            }
            }
            echo"</>"; 



        }
        
    }
?>