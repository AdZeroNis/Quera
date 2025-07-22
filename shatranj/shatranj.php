<?php   

$array=[1,1,2,2,2,8];
$n = explode(" ", readline());

for($i=0;$i<6;$i++){
     $n[$i] = intval($n[$i]);
}

for($i=0;$i<6;$i++){
     
 echo $array[$i]-$n[$i]. " ";
}






?>