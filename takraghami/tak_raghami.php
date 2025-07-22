<?php 

$n = intval(readline());
$digits = str_split($n);
$sum=0;
foreach($digits as $values)
{
    $sum += $values;
    if($sum>=10){
       $digits2 = str_split($sum);
       $sum = 0;
       foreach($digits2 as $values2)
        {
            $sum += $values2;  
        }
    }
}
echo $sum;



?>