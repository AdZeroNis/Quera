<?php
$N = intval(readline());

$counter = 1;
$s = 0;
while ($counter < $N) {
    if ($N % $counter == 0) {
        $s += $counter;
    }
    $counter += 1;
}

if ($s == $N) {
    echo "YES";
} else {
    echo "NO";
}
?>
