<?php

$n = intval(readline());

$digits = str_split($n);

foreach ($digits as $values) {
        if ($values == 0) {
           echo "0:\n";
        } else {
           echo $values . ":". str_repeat($values , intval($values)) . "\n";
        }
    }
