Soal 1 |
<br>
=============================================
<br> 
<?php
$luas_persegi = 25;

$panjang_sisi = sqrt($luas_persegi);

if ($luas_persegi > 0) {
    echo "Luas persegi: " . $luas_persegi . " cm<br>";
    echo "Panjang sisi: " . $panjang_sisi . " cm<br>";
} else {
    echo "Luas persegi harus bernilai positif.";
}
?>
<br>
==============================================
<br>
Soal 2 |
<br>
<?php
$sekarang = "11:30";
$waktu = explode(':', $sekarang);
$jam = $waktu[0];
$menit = $waktu[1];

if (($jam == 7 && $jam >=   0) || ($jam == 11 && $menit <= 30)) {
    echo "Sedang bekerja";
  } elseif (($jam == 11 && $jam >= 30) || ($jam == 12 && $menit < 15)) {
    echo "Sedang istirahat";
}elseif (($jam == 12 && $menit >= 30) || ($jam == 12 && $jam < 15) || ($jam > 12 && $jam < 16)) {
  echo "Sedang bekerja";
} else {
  echo "Sudah Pulang bekerja";
}

?>