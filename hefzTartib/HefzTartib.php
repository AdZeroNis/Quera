<?php

function prs($d1, $d2) {
    $last = -1;
    $r = true;

    for ($i = 0; $i < strlen($d2); $i++) {
        $index = strpos($d1, $d2[$i], $last + 1);

        if ($index > $last) {
            $last = $index;
        } else {
            $r = false;
            break;
        }
    }
    return $r;
}

$n = intval(trim(fgets(STDIN)));
$output = [];

for ($i = 0; $i < $n; $i++) {
    $d1 = trim(fgets(STDIN));
    $d2 = trim(fgets(STDIN));

    $result = prs($d1, $d2);

    if (!$result) {
        $d1 = strrev($d1);
    }

    if (prs($d1, $d2)) {
        $output[] = "YES";
    } else {
        $output[] = "NO";
    }
}

foreach ($output as $line) {
    echo $line . "\n";
}
