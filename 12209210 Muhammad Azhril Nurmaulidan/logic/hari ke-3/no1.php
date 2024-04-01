<<<<<<< HEAD
<?php
$sekarang = "15:40";
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
=======
<?php
$sekarang = "15:40";
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
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
}