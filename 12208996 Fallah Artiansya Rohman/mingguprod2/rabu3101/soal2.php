<?php

function hitungSelisihWaktu($waktuMulai, $waktuSelesai) {
    $waktuMulai = explode(':', $waktuMulai);
    $waktuSelesai = explode(':', $waktuSelesai);

    $waktuMulai = $waktuMulai[0] * 3600 + $waktuMulai[1] * 60;
    $waktuSelesai = $waktuSelesai[0] * 3600 + $waktuSelesai[1] * 60;

    $selisihWaktu = abs($waktuSelesai - $waktuMulai);

    $jam = floor($selisihWaktu / 3600);
    $menit = floor(($selisihWaktu % 3600) / 60);

    return array('jam' => $jam, 'menit' => $menit);
}

$waktuMulai = '10:35';
$waktuSelesai = '11:40';

$selisihWaktu = hitungSelisihWaktu($waktuMulai, $waktuSelesai);

echo "Output : " . $selisihWaktu['jam'] . " jam " . $selisihWaktu['menit'] . " menit";

?>