<?php

function isPrime($n) {
    if ($n == 0 || $n == 1) {
        return false;
    } else {
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

function printPrimes($n1, $n2) {
    for ($n = $n1; $n <= $n2; $n++) {
        if (isPrime($n)) {
            echo $n . "\n";
        }
    }
}

$n1 = readline("Enter the first number: ");
$n2 = readline("Enter the second number: ");
printPrimes($n1, $n2);

?>
