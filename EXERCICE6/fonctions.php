<?php
function testSaisie( $a  , $b  , $c ):void{
   if (isset ($_POST['valider'])){

     if (!empty($a)&& !empty($b)&&!empty($c)) {
       
      if (intval($a)&& intval($b)&& intval($c) ) {
        # code...
        equationSecodeDegre($a,$b,$c);
      } 
      else {
        # code...
        header("location:exo6.html.php");
      }
      

     
      }
else {
  
  header("location:exo6.html.php");
}
}
}


function equationSecodeDegre( $a, $b,$c):void{

$delta= pow($b,2)-4*$a*$c;
if ($delta==0) {
  echo"******L EQUATION ADMET UNE  SOLUTION UNIQUE******"."<br>";
    echo"S={".-1*$b/2*$a."}";
   
}
elseif($delta<0){

echo"********L' equation d admet pas de solution dans R*********"."<br>";
echo"S={"." "."}";
}
else{
  echo"******L EQUATION ADMET DEUX SOLUTION******"."<br>";

echo"S={".-1*$b-sqrt($delta)/2*$a." ; ".-1*$b+sqrt($delta)/2*$a."}";
}
}

?>