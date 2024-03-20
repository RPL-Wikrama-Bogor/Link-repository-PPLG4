<?php

function Pembagian($angka) {
    $hasilBagi = [];

    if ($angka % 3 == 0) {
        $hasilBagi[] = 3;
    }
    if ($angka % 5 == 0) {
        $hasilBagi[] = 5;
    }
    if ($angka % 7 == 0) {
        $hasilBagi[] = 7;
    }
    if ($angka % 10 == 0) {
        $hasilBagi[] = 10;
    }
    return $hasilBagi;
}

function Hasil($pembagian) {
    if (count($pembagian) == 1 && $pembagian[0] == 5) {
        print("Angka 1000 bisa dibagi dengan angka 5 saja");
    } else if (count($pembagian) == 2 && in_array(5, $pembagian) && in_array(10, $pembagian)) {
        print("Angka 1000 bisa dibagi dengan angka 5 dan 10");
    } else {
        print("Angka 1000 tidak bisa dibagi dengan angka 3, 5, 7, dan 10");
    }
}

$hasilBagi = Pembagian(1000);

Hasil($hasilBagi);