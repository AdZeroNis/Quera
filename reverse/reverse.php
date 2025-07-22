<?php 

$number=[];

for($i=1;$i<=1000;$i++)
{
    $n = intval(readline());
    if($n===0){

        break;
    }
    $number[]=$n;
}

for($i=count($number)-1;$i>=0;$i--){
    echo $number[$i]."\n";
}


?>