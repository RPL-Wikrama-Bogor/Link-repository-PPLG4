<?php

function mengubahPmAm($waktu) {
    list($jam, $menit) = explode('.', $waktu);
    if ($jam == 7){
        $waktu = sprintf("%02d:%02d Pm", $jam, $menit);
    }elseif ($jam >= 12) {
        $waktu = sprintf("%02d:%01d Pm", $jam, $menit);
    } else {
        $waktu = sprintf("%02d:%01d Am", $jam, $menit);
    }
    return $waktu;
}

$waktu1 = "07.00";
$hasil1 = mengubahPmAm($waktu1);
echo "Waktu pertama diubah menjadi : $hasil1 <br>";

$waktu2 = "23.45";
$hasil2 = mengubahPmAm($waktu2);
echo "Waktu kedua diubah menjadi : $hasil2 <br>";

$waktu3 = "08.55";
$hasil3 = mengubahPmAm($waktu3);
echo "Waktu ketiga diubah menjadi : $hasil3 <br>";