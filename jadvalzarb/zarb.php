<?php 

$n = intval(readline('enter number ='));

for($i=1;$i<=$n;$i++)
{
    for ($j = 1; $j <= $n; $j++) {
        echo $i*$j;
        if($j<$n){
            echo " ";
        }
    }
    echo "\n"; 
}

?>