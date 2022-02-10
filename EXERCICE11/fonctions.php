<?php

function saisi($n):bool{
return empty($n);
}

function contrnum($n):bool{
    return is_numeric($n);
    }
    
function control($n){

    if (saisi($n)) {
        # code...
        $msg= "veiller saisir une valeur \n";
        header("location:index.php?msg=$msg");
    }
    elseif(!contrnum($n)){
        $msg1= "veiller saisir une valeur numerique";
        header("location:index.php?msg1=$msg1");
    }
else{
    echo(affichenombre1ere($n));
}
}
function affichenombre1ere($n){
   
    $tab=[
"premiere"=>[],
"inferieur"=>[],
"superieur"=>[]
    ];
    echo "Nombre premiere "."<br>";
    for ($i=2; $i<=$n ; $i++) { 
        # code...
      if(premiere($i)){
      
      $tab["premiere"][]=$i."<br>";
          
      }
      
}
 $prem=$tab["premiere"];
 echo"<table border=1 width=20>";
foreach($prem as $i=> $d){
if($i%3==0){
  echo "<tr>";
}

echo "<td>".$d."</td>";
if(($i+1)%3==0){
echo"</tr>";   
}
}
echo"</table>";   
echo "la moyenne=".$n/2;
echo"<br>";
      

echo "Nombre premiere inferieur a $n/2"."<br>";
for ($i=2; $i<=$n/2 ; $i++) { 
    # code...
  if(premiere($i)){
  
    $tab["inferieur"][]=$i."<br>";


  }
}
$prem=$tab["inferieur"];
echo"<table border=1 width=20>";
foreach($prem as $i=> $d){
if($i%3==0){
 echo "<tr>";
}

echo "<td>".$d."</td>";
if(($i+1)%3==0){
echo"</tr>";   
}
}
echo"</table>";   


echo "Nombre premiere superieur a $n/2"."<br>";
for ($i=$n/2; $i<=$n ; $i++) { 
    # code...
  if(premiere($i)){
  
    $tab["superieur"][]=$i."<br>";
    
  }
  
}
$prem=$tab["superieur"];
echo"<table border=1 width=20>";
foreach($prem as $i=> $d){
if($i%3==0){
 echo "<tr>";
}

echo "<td>".$d."</td>";
if(($i+1)%3==0){
echo"</tr>";   
}
}
echo"</table>";   

}


function premiere($n){
    $cpt=1;
    for ($i=2; $i<=$n ; $i++) { 
        # code...=
      if($n%$i==0){
       $cpt++;
      }
    }
if ($cpt==2) {
    # code...
return true;
}
else{
    return false;
}
}

?>
