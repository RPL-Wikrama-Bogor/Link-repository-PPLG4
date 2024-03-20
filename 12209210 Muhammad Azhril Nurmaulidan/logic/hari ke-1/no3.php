<?php
$panjang_tanah = 13;
$lebar_tanah = 9;

$luas_tanah = $panjang_tanah * $lebar_tanah;

if ($luas_tanah < 90) {
    $tipe_rumah = "Tipe 36";
} elseif ($luas_tanah >= 90 && $luas_tanah <= 96) {
    $tipe_rumah = "Tipe 45";
} elseif ($luas_tanah > 96 && $luas_tanah <= 120) {
    $tipe_rumah = "Tipe 54";
} elseif ($luas_tanah > 120 && $luas_tanah <= 150) {
    $tipe_rumah = "Tipe 60";
} else {
    $tipe_rumah = "Tipe 70";
}

echo "Luas tanah Dani adalah : {$luas_tanah} m²";
echo ", dengan tipe rumah : {$tipe_rumah}";
