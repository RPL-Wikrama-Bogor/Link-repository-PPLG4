<?php

function angka($a){
    $as = substr($a, 0,2);
    if($as >= '12'){
         $asj = $as - 12;
         $asm = substr($a,2,4);
        echo $asj . $asm ." pm </br>";
     }else{
         echo "$a am </br>";
     }
}
$a = '19:00';
angka($a);
$a = '23:45';
angka($a);
$a = '08:55';
angka($a);