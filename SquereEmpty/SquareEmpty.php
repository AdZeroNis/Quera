<?php
$a = intval(readline("Enter  a: "));
$b = intval(readline("Enter  b: "));

if ($a <= $b) {
    echo "Wrong order!";
} elseif (($a - $b) % 2 !== 0) {
    echo "Wrong difference!";
} else {
    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $a; $j++) {
            if ($i == 1 || $i == $a || $j == 1 || $j == $a) {
                echo "* ";
            } elseif ($i > (($a - $b) / 2) && $i <= ($a - (($a - $b) / 2)) && $j > (($a - $b) / 2) && $j <= ($a - (($a - $b) / 2))) {
                echo "  ";
            } else {
                echo "* ";
            }
        }
        echo PHP_EOL;
    }
}
?>