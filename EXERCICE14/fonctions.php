 <?php
 session_start();  
  function vide($num):bool{
      return empty($num);
  }
  function numero($num):bool{
      return is_numeric($num);
  }
    function compte($num):bool{
            # code...
            return (strlen($num)==9);
    }
    function comptenum($num):bool{
        return (substr($num,0,2)=="77" || substr($num,0,2)=="78" || substr($num,0,2)=="76" || substr($num,0,2)=="70" || substr($num,0,2)=="75" );
        }
        

function testsaisi($num):void{
if(vide($num)){
$msg="veiller saisir du contenu dans ce champs";
header("location:index.php?msg=$msg");
}
elseif (!numero($num)){
    # code...
$msg1="veiller saisir un numero de telephone valide";
header("location:index.php?msg1=$msg1");
}
else{
 echo"bjrs";

    $tab=explode(' ',$num);
    $TOUT=array_map('trim',  $tab);
    $correct_numb=[];
    $incorrect_numb=[];
    $j=0;
     $k=0;
    for ($i=0; $i < count($TOUT); $i++) { 
        if (compte($TOUT[$i]) && comptenum($TOUT[$i])) {
            $correct_numb[$j]=$TOUT[$i];
            $j++;
        }
        $incorrect_numb[$k]=$TOUT[$i];
        $k++;
    }
    $numb_traite=[
        "bonnumero"=> $correct_numb,
        "nonumero"=>$incorrect_numb
    ];
    $_SESSION['tout']=$numb_traite;
   
    header("location:index.php");
    exit();
    }

}

 ?>