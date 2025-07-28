<?php 

$n = readline();

list($x1,$y1,$x2,$y2) = array_map('intval',explode(' ', $n));

if ($y1 == $y2) {
    echo "Horizontal\n";
} elseif ($x1 == $x2) {
    echo "Vertical\n";
} else {
    echo "Try again\n";
}



?>