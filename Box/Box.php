<?php
function isPrime($num) {
    $isPrime = true;
    for ($i = 2; $i <= $num / 2 + 1; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    return $isPrime;
}

function findCenter($num) {
    return ($num / 2.0) + 0.5;
}

function findOpposite($length, $num) {
    $center = findCenter($length);
    $result = 0;
    if ($length % 2 == 0) { 
        if ($num < $center) {
            $result = (int)($center + ($center - $num));
        }
        if ($num > $center) {
            $result = (int)($center - ($num - $center));
        }
    } else { 
        if ($num == (int)$center) {
            $result = $num;
        }
        if ($num < $center) {
            $result = (int)($center + ($center - $num));
        }
        if ($num > $center) {
            $result = (int)($center - ($num - $center));
        }
    }
    return $result;
}

$line = readline();
$lineArr = explode(" ", $line);
$row = (int)$lineArr[0];
$column = (int)$lineArr[1];
$count = (int)$lineArr[2];

$list = [];
for ($i = 0; $i < $row; $i++) {
    $input = readline();
    $inputArr = explode(" ", $input);
    $list[$i] = [];
    for ($j = 0; $j < $column; $j++) {
        $list[$i][$j] = (int)$inputArr[$j];
    }
}

$current = $list[0][0];
$currentRow = 0;
$currentColumn = 0;

for ($i = 0; $i < $count; $i++) {
    if (isPrime($current)) {
        $currentRow = findOpposite($row, $currentRow + 1) - 1;
        $currentColumn = findOpposite($column, $currentColumn + 1) - 1;
        $current = $list[$currentRow][$currentColumn];
    } else {
        switch ($current % 4) {
            case 0:
                if ($currentColumn == $column - 1) {
                    $currentColumn = 0;
                } else {
                    $currentColumn++;
                }
                $current = $list[$currentRow][$currentColumn];
                break;
            case 1:
                if ($currentRow == $row - 1) {
                    $currentRow = 0;
                } else {
                    $currentRow++;
                }
                $current = $list[$currentRow][$currentColumn];
                break;
            case 2:
                if ($currentColumn == 0) {
                    $currentColumn = $column - 1;
                } else {
                    $currentColumn--;
                }
                $current = $list[$currentRow][$currentColumn];
                break;
            case 3:
                if ($currentRow == 0) {
                    $currentRow = $row - 1;
                } else {
                    $currentRow--;
                }
                $current = $list[$currentRow][$currentColumn];
                break;
        }
    }
}

echo ($currentRow + 1) . " " . ($currentColumn + 1) . "\n";
