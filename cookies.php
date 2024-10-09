<?php

setcookie("fruit", "apple", time() + (86400));

if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE);      
}else{
    echo "no cookies";
}
?>