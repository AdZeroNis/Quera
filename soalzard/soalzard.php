<?php
$n = readline();
$i = 0;
$result = "W";
$output = $result;

while ($i < $n) {
    $output .= 'o';
    $i++;
}

$output .= 'w!';
echo $output;
?>