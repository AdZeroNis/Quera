<?php 
$sh = array_map('intval', explode(' ', readline())); 
$k = array_map('intval', explode(' ', readline())); 
 
function disk($wk1, $wk2) { 
    $n1 = strval($wk1[0] + $wk2[0]); 
    $n2 = strval($wk1[1] + $wk2[1]); 
    $n3 = strval($wk1[2] + $wk2[2]); 
    $nall = intval($n1[-1]) . intval($n2[-1]) . intval($n3[-1]); 
 
    if ($nall % 6 == 0) { 
        return "Boro joloo :)"; 
    } else { 
        return "Gir oftadi :("; 
    } 
} 
 
$sum = 0;
$shLength = count($sh);

for ($i = 0; $i < $shLength; $i++) {
    $free = 0;
    $loser = 0;
    $a = $sh[0]; 
    array_shift($sh);
    $sh[] = $a; 
 
    $kLength = count($k);
    for ($j = 0; $j < $kLength; $j++) {
        $sum += 1;
        $a2 = $k[0]; 
        array_shift($k);
        $k[] = $a2;

        $r = disk($sh, $k);
        if ($r == "Boro joloo :)") {
            $free ++;
            break;
        } else {
            if ($sum == 25) {
                $loser ++;
                break;
            }
        }
    }
    if ($free != 0) { 
        echo "Boro joloo :)\n"; 
        break; 
    } else if ($loser != 0) { 
        echo "Gir oftadi :(\n"; 
        break; 
    } 
}
?> 