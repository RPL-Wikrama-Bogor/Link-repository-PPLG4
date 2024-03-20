<?php

$andi_belanja = 154000;
$hasil;
$total;

if ($andi_belanja > 100000) {
    $hasil = ($andi_belanja / 100) * 7;
    $total = $andi_belanja - $hasil;
    echo "harga yang harus dibayar andi adalah $hasil";
} else {
    $hasil = 154000;
    echo "harga yang harus dibayar andi adalah $hasil";
}