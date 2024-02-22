<?php
$jam_sekarang = 9; 

if ($jam_sekarang >= 7 && $jam_sekarang < 12) {
    echo "Sekarang jam kerja.";
} elseif ($jam_sekarang >= 12 && $jam_sekarang < 13) {
    echo "Sekarang jam istirahat.";
} else {
    echo "Sekarang waktu bebas.";
}
?>