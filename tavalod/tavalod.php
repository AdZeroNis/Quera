<?php 


$n = intval(readline());

$month = $n % 100;
$month = sprintf("%02d", $month);
$year = intval($n / 100);
echo "saal :" . $year. "\n" ;
if($month>12){
    echo "mah vojod nadarad";
}else{
echo "maah :" . $month ;
}




?>