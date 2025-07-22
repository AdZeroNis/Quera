<?php  
 $n = intval(readline());
 $m = intval(readline());

 function reverseValue($num)
 {
    $sad = $num / 100;
    $dah = ($num % 100) / 10;
    $yek  = $num % 10;

    return $yek * 100 + $dah * 10 + $sad;
 }

 $valueA = reverseValue($n);
 $valueB = reverseValue($m);

 if ($valueA > $valueB)
 {
    echo "$n > $m";
 }elseif($valueA < $valueB){
    echo "$n < $m";
 }else{
    echo "$n = $m";
 }


?>