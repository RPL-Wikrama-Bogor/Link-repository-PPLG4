<?php
$jamKerjaPerHari = 8;
$shalat = 20;
$makan = 30;
$hasil = hitungWaktuKerja($jamKerjaPerHari, $shalat, $makan);

function hitungWaktuKerja($jamKerja, $shalat, $makan) {
    $waktuKerja = $jamKerja * 60;
    $totalIstirahat = $shalat + $makan;
    $waktuKerjaBersih = $waktuKerja - $totalIstirahat;
    $jamKerjaBersih = floor($waktuKerjaBersih / 60);
    $menitKerjaBersih = $waktuKerjaBersih % 60;
    $jamShalat = floor($shalat / 60);
    $menitShalat = $shalat % 60;
    $jamMakan = floor($makan / 60);
    $menitMakan = $makan % 60;
    return array(
        'jamKerja' => $jamKerjaBersih,
        'menitKerja' => $menitKerjaBersih,
        'jamShalat' => $jamShalat,
        'menitShalat' => $menitShalat,
        'jamMakan' => $jamMakan,
        'menitMakan' => $menitMakan,
        'totalIstirahat' => $totalIstirahat
    );
}

echo "Waktu kerja bersih: " . $hasil['jamKerja'] . " jam " . $hasil['menitKerja'] . " menit\n";
echo "Waktu istirahat shalat: " . $hasil['menitShalat'] . " menit\n";
echo "Waktu istirahat makan: " . $hasil['menitMakan'] . " menit\n";
echo "Waktu istirahat total: " . $hasil['totalIstirahat'] . " menit";
?>