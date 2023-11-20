<?php
function First($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}


function checkCenter($number) {
    return ($number + 1) / 2;
}


function checkNext($length, $number) {
    $center = (int)(($length + 1) / 2);

    if ($number == $center) {
        return $number;
    }

    $space = abs($number - $center);
    $result = $center - $space;

    return $result;
}


$L = readline();
$lineArray = explode(" ", $L);
$row = (int)$lineArray[0];
$col = (int)$lineArray[1];
$counting = (int)$lineArray[2];

$list = [];
for ($i = 0; $i < $row; $i++) {
    $Entrance = readline();
    $EnArray = explode(" ", $Entrance);
    $list[$i] = [];
    for ($j = 0; $j < $col; $j++) {
        $list[$i][$j] = (int)$EnArray[$j];
    }
}

$perfom = $list[0][0];
$perRow = 0;
$percol = 0;

for ($i = 0; $i < $counting; $i++) {
    if (First($perfom)) {
        $perRow = checkNext($row, $perRow + 1) - 1;
        $percol = checkNext($col, $percol + 1) - 1;
        $perfom = $list[$perRow][$percol];
    } else {
        switch ($perfom % 4) {
            case 0:
                if ($percol == $col - 1) {
                    $percol = 0;
                } else {
                    $percol++;
                }
                $perfom = $list[$perRow][$percol];
                break;
            case 1:
                if ($perRow == $row - 1) {
                    $perRow = 0;
                } else {
                    $perRow++;
                }
                $perfom = $list[$perRow][$percol];
                break;
            case 2:
                if ($percol == 0) {
                    $percol = $col - 1;
                } else {
                    $percol--;
                }
                $perfom = $list[$perRow][$percol];
                break;
            case 3:
                if ($perRow == 0) {
                    $perRow = $row - 1;
                } else {
                    $perRow--;
                }
                $perfom = $list[$perRow][$percol];
                break;
        }
    }
}

echo ($perRow + 1) . " " . ($percol + 1) . "\n";
?>
