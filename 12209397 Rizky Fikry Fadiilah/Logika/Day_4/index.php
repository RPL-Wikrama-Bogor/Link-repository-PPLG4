<?php
$waktu1 = '19:00';
$waktu2 = '23:55';
$waktu3 = '08:55';
$ubah1 = ubahFormatWaktu($waktu1);
$ubah2 = ubahFormatWaktu($waktu2);
$ubah3 = ubahFormatWaktu($waktu3);

function ubahFormatWaktu($waktu) {
    $jam = (int) substr($waktu, 0, 2);
    $menit = substr($waktu, 3, 2);

    $amPm = ($jam < 12) ? 'AM' : 'PM';
    $jam = ($jam > 12) ? $jam - 12 : ($jam == 0 ? 12 : $jam);

    return "$jam:$menit $amPm";
}

echo "Diubah 1: $ubah1\n";  
echo "Diubah 2: $ubah2\n";
echo "Diubah 3: $ubah3";
?>