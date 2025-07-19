<?php 

$n = intval(readline("Enter Number :"));

for($i=0;$i<=$n;$i++)
{
    if($i==$n)
    {
        echo "w". str_repeat("o", $i)."w!";
    }
}

?>