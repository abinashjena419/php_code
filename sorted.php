<?php

function swap($arrrray, $i, $j){
    $t = $arrrray[$i];
    $arrrray[$i] = $arrrray[$j];
    $arrrray[$j] = $t;
}

$arr = array(1, 5, 3, 8, 4, 2, 7, 6, 9);

for ($i = count($arr); $i > 1; $i--) {
    for ($j = 0; $j < $i-1; $j++) {    
        if ($arr[$j] > $arr[$j+1]) {
            $t = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $t;
        }
    }
}

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i].", ";
}

?>