<?php
$a = intval(readline());
$b = intval(readline());
$c = intval(readline());

if ($a != 0 && $b != 0 && $c != 0) {
    if ($a ** 2 == $b ** 2 + $c ** 2 || $b ** 2 == $a ** 2 + $c ** 2 || $c ** 2 == $a ** 2 + $b ** 2) {
        echo "YES";
    } else {
        echo "NO";
    }
} else {
    echo "NO";
}
