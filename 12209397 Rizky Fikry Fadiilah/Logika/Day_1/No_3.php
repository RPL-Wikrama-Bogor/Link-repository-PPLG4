<?php

$lebarTanah = 9;
$panjangTanah = 13;

$luasTanah = $lebarTanah * $panjangTanah;

if ($luasTanah < 90) {
    $tipeRumah = "Tipe rumah Dani adalah nomor 36";
} elseif ($luasTanah >= 90 && $luasTanah <= 96) {
    $tipeRumah = "Tipe rumah Dani adalah nomor 45";
} elseif ($luasTanah > 96 && $luasTanah <= 120) {
    $tipeRumah = "Tipe rumah Dani adalah nomor 54";
} elseif ($luasTanah > 120 && $luasTanah <= 150) {
    $tipeRumah = "Tipe rumah Dani adalah nomor 60";
} else {
    $tipeRumah = "Tipe rumah Dani adalah nomor 70";
}

echo "Luas tanah: $luasTanah m2\n";
echo "Tipe rumah: $tipeRumah\n";

?>
