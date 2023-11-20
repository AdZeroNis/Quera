<?php
$Entrance = readline();
$Entrance = explode(" ", $Entrance);
$count = intval($Entrance[0]);
$f = intval($Entrance[1]);
$s = intval($Entrance[2]);

$goal = readline();
$goal = explode(" ", $goal);

$sum = computing($goal, $f, $s);

if ($sum < $count) {
    echo "NO" . PHP_EOL;
} else {
    echo "YES" . PHP_EOL;
}
function computing($goal, $f, $s)
{
    $FTGoals = 0;
    $STGoals = 0;

    $done = false;
    $prFTH = intval($goal[0]);
    $prSTH = 45;

    foreach ($goal as $i) {
        $goal = intval($i);

        if ($goal <= 45 + $f && $goal >= $prFTH && !$done) {
            $FTGoals++;
        }
        else if ($goal >= 45 && $goal <= 90 + $s && $goal >= $prSTH) {
            $STGoals++;
            $done = true;
            $prSTH = $goal;
        }
        $prFTH = $goal;
    }
    return $FTGoals + $STGoals;
}
?>
