<!-- 
Iteration  for (i=0; i<n; i++)
10*9*8*...1
-------------------------
recursive
function fatorial(n) {
    if (n<0) print("Please provide non-negative niumber")
    if (n==0) return 1;
    retrun n*fatorial(n-1);
}

fact(n) = n*fact(n-1)
fact(0) = 1;
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