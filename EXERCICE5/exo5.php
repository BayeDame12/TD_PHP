<?php
function point($x1,$x2,$y1,$y2){
$d1=$x2-$x1;
$d2=$y2-$y1;
 $d=sqrt(pow($d1,2)+pow($d2,2));
 return $d;
}

?>