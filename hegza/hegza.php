<?php

$t = intval(readline());
$answers = [];

for ($i = 0; $i < $t; $i++) {
    $s = readline();
    $a = substr_count($s, 'A') - substr_count($s, 'D');
    $b = substr_count($s, 'B') - substr_count($s, 'E');
    $c = substr_count($s, 'C') - substr_count($s, 'F');

    $s = abs($a) + abs($b) + abs($c);

    while (true) {
        if ($a > 0 && $c > 0) {
            $x = min($a, $c);
            $a -= $x;
            $b += $x;
            $c -= $x;
        } elseif ($a < 0 && $c < 0) {
            $x = max($a, $c);
            $a -= $x;
            $b += $x;
            $c -= $x;
        } elseif ($a > 0 && $b < 0) {
            $x = min($a, -$b);
            $a -= $x;
            $b += $x;
            $c -= $x;
        } elseif ($b > 0 && $a < 0) {
            $x = min($b, -$a);
            $a += $x;
            $b -= $x;
            $c += $x;
        } elseif ($b > 0 && $c < 0) {
            $x = min($b, -$c);
            $a += $x;
            $b -= $x;
            $c += $x;
        } elseif ($c > 0 && $b < 0) {
            $x = min($c, -$b);
            $a -= $x;
            $b += $x;
            $c -= $x;
        }

        $new_s = abs($a) + abs($b) + abs($c);

        if ($new_s == $s) {
            $answers[] = $new_s;
            break;
        } else {
            $s = $new_s;
        }
    }
}

foreach ($answers as $answer) {
    echo $answer . "\n";
}
