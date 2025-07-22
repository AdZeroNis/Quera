<?php  

$a = intval(readline());
$b = intval(readline());
$c = intval(readline());

if($a < 0 || $b < 0 || $c < 0) {
    echo "No";
} elseif($a > 360 || $b > 360 || $c > 360) {
    echo "No";
} else {
    $d = $a + $b + $c;
    if($d == 360) {
        echo "Yes";
    } else {
        echo "No";
    }
}
