<?php

$luasPersegi = 25;
$panjangSisi = 0;

while ($panjangSisi <= $luasPersegi) { 
    if ($panjangSisi * $panjangSisi == $luasPersegi) {
        echo "panjang Sisi $panjangSisi ";
        break; 
    } else {
        $panjangSisi++;
    }
   
}