<<<<<<< HEAD
<?php
$jam = 15;
$menit = 40;
$hasil = cekWaktu($jam, $menit);

function cekWaktu($jam, $menit) {
    $waktu = $jam * 100 + $menit;

    if (($waktu >= 700 && $waktu < 1130) || ($waktu >= 1215 && $waktu < 1600)) {
        return "waktu kerja";
    } elseif ($waktu >= 1130 && $waktu < 1215) {
        return "waktu istirahat";
    } else {
        return "bukan waktu kerja";
    }
}

echo "sekarang adalah: $hasil";
=======
<?php
$jam = 15;
$menit = 40;
$hasil = cekWaktu($jam, $menit);

function cekWaktu($jam, $menit) {
    $waktu = $jam * 100 + $menit;

    if (($waktu >= 700 && $waktu < 1130) || ($waktu >= 1215 && $waktu < 1600)) {
        return "waktu kerja";
    } elseif ($waktu >= 1130 && $waktu < 1215) {
        return "waktu istirahat";
    } else {
        return "bukan waktu kerja";
    }
}

echo "sekarang adalah: $hasil";
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
?>