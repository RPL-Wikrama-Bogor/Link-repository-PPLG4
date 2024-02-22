<?php
function hitungWaktuKerja() {
    $jamKerjaPerHari = 8 * 60; 
    $istirahatShalat = 20; 
    $istirahatMakan = 30; 

    $waktuKerja = $jamKerjaPerHari - $istirahatShalat - $istirahatMakan;

    return array($waktuKerja, $istirahatShalat, $istirahatMakan);
}

list($waktuKerja, $istirahatShalat, $istirahatMakan) = hitungWaktuKerja();

$waktuKerjaJam = floor($waktuKerja / 60);
$waktuKerjaMenit = $waktuKerja % 60;

$istirahatShalatJam = floor($istirahatShalat / 60);
$istirahatShalatMenit = $istirahatShalat % 60;

$istirahatMakanJam = floor($istirahatMakan / 60);
$istirahatMakanMenit = $istirahatMakan % 60;

echo "Waktu kerja per hari: " . $waktuKerjaJam . " jam " . $waktuKerjaMenit . " menit<br>";
echo "Waktu istirahat shalat per hari: " . $istirahatShalatMenit . " menit<br>";
echo "Waktu istirahat makan per hari: " . $istirahatMakanMenit . " menit<br>";
?>
