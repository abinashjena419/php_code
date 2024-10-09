<?php

$a = 4;
$b = 7;
$c = 8;

// 8 4 7
// 8 7 4   <----- done
// 7 4 8   <----- done
// 7 8 4
// 4 7 8   <----- done
// 4 8 7   <----- done

if($a > $b){
    if($a > $c){
        echo $a;
    } else{
        echo $c;
    }
}
else {
    if ($b > $c) {
        echo $b;
    } else {
        echo $c;
    }
}

?>



