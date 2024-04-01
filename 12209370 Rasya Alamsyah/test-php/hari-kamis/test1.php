<?php

function konversiWaktu($waktu) {
    $jam = substr($waktu, 0, 2);
    $menit = substr($waktu, 3, 2); 
 
    $ampm = ($jam < 12) ? "pm" : "am";
    $jam = ($jam % 12 == 0) ? 12 : $jam % 12;

    return "$jam, $menit, $ampm";
}


$waktu1 = "19:00";
$waktu2 = "23:45";
$waktu3 = "08:55";
$hasil1 = konversiWaktu($waktu1);
$hasil2 = konversiWaktu($waktu2);
$hasil3 = konversiWaktu($waktu3);
echo "Waktu awal: $waktu1, Waktu diubah: $hasil1<br>";
echo "Waktu awal: $waktu2, Waktu diubah: $hasil2<br>";
echo "Waktu awal: $waktu3, Waktu diubah: $hasil3<br>";

?>
