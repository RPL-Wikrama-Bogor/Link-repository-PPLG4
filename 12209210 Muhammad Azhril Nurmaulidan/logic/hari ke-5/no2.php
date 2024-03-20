<?php

function hitungWaktuKerja($jamKerja, $istirahatSholat, $istirahatMakan) {
    $jamKerjaDetik = $jamKerja * 60 * 60;
    $istirahatSholatDetik = $istirahatSholat * 60;
    $istirahatMakanDetik = $istirahatMakan * 60;

    $totalWaktuKerja = $jamKerjaDetik - $istirahatSholatDetik - $istirahatMakanDetik;

    $jam = floor($totalWaktuKerja / 3600);
    $menit = floor(($totalWaktuKerja % 3600) / 60);

    return ['jam' => $jam, 'menit' => $menit];
}

$jamKerjaPerHari = 8;
$istirahatSholat = 20;
$istirahatMakan = 30;

$hasilHitung = hitungWaktuKerja($jamKerjaPerHari, $istirahatSholat, $istirahatMakan);

echo "Jam kerja $jamKerjaPerHari jam <br>";
echo "Waktu sholat $istirahatSholat menit <br>";    
echo "Waktu makan $istirahatMakan menit <br>";
echo "Total waktu Kerja : {$hasilHitung['jam']} jam {$hasilHitung['menit']} menit";
