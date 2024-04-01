<?php 

$a = 154000;

if ($a >= 100000){
    $dis = ($a /100) * 7 ; 
    $ttl = $a - $dis;
    echo "bayar $ttl";
}else{
    echo "bayar $a";
}