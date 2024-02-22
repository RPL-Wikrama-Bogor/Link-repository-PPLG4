<?php
function konversiWaktu($waktuDetik) {
    $jam = floor($waktuDetik / 3600);
    $menit = floor(($waktuDetik % 3600) / 60);
    $detik = $waktuDetik % 60;

    return array('jam' => $jam, 'menit' => $menit, 'detik' => $detik);
}

$waktuDetik = 3661; // contoh input

$waktu = konversiWaktu($waktuDetik);

echo "Output : " . $waktu['jam'] . " jam " . $waktu['menit'] . " menit " . $waktu['detik'] . " detik";
?>
