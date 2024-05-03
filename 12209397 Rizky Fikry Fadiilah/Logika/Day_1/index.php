<?php
$usia = 13;
$jam_tidur;

if ($usia >= 6 && $usia < 12) {
    $jam_tidur = 10;
} elseif ($usia >= 12 && $usia < 18) {
    $jam_tidur = 8;
} elseif ($usia >= 18 && $usia <= 40) {
    $jam_tidur = 7;
} else {
    $jam_tidur = "Tidak ada aturan untuk usia ini";
}

echo "Usia: $usia tahun, Jam Tidur: $jam_tidur jam";
?>