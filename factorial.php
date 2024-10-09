<!-- 
Iteration  for (i=0; i<n; i++)
10*9*8*...1
------------------------- -->


<?php

$num = 4;
$fact = 1;

if($num < 0){
    echo "factorial is not defind for negative numbers";
    return;
}

for($x = $num; $x >= 1; $x--){
    $fact = $fact * $x;
}

echo "factorial of $num is $fact";

?>