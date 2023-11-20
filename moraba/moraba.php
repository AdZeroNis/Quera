<?php

$n=intval(readline());

for($i=1;$i<=$n;$i++){
    echo "*";
}
echo "\n";
    if($n-2!=0){
        for($i=1;$i<=$n-2;$i++){
            echo "*";
            for($j=1;$j<=$n-2;$j++){
                echo " ";
            }
            echo "*\n";
        }
    }
    for($i=1;$i<=$n;$i++){
         echo "*";
    }
    echo "\n";
    ?>