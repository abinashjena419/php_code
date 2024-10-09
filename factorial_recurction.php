<?php

function factorial($n) {
    if ($n < 0) {
        print("Please provide non-negative niumber");
        return NAN;
    }
    
    if ($n==0) {
        return 1;
    }

    return $n * factorial($n -1);
}

$n=9;

echo factorial($n);

?>