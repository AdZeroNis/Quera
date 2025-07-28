<?php 

$x = intval(readline());
$n = intval(readline());

if($x<0 || $x>20 || $n<0 || $n>100) {
    echo "error";
}elseif($n==0){
    echo "20";
}elseif($n==7){
    echo $x;
}else{
    echo $x-$n;
}






?>