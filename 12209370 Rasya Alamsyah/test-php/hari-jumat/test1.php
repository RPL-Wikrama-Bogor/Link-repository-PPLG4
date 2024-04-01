<?php

function cekPembagian($angka, $pembagi) {
    return ($angka % $pembagi == 0);
}

function hitungPembagian($angka) {
    $hasil = [];

    if (cekPembagian($angka, 3)) {
        $hasil[] = 3;
    }
    if (cekPembagian($angka, 5)) {
        $hasil[] = 5;
    }
    if (cekPembagian($angka, 7)) {
        $hasil[] = 7;
    }
    if (cekPembagian($angka, 10)) {
        $hasil[] = 10;
    }

    return $hasil;
}

$angka = 1000;
$hasilPembagian = hitungPembagian($angka);

if (empty($hasilPembagian)) {
    echo "Angka $angka tidak dapat dibagi oleh 3, 5, 7, atau 10.";
} else {
    $hasilString = implode(', ', $hasilPembagian);
    
    if (count($hasilPembagian) == 1) {
        echo "Angka $angka bisa dibagi dengan angka $hasilString saja.";
    } else {
        echo "Angka $angka bisa dibagi dengan angka $hasilString.";
    }
}

?>
