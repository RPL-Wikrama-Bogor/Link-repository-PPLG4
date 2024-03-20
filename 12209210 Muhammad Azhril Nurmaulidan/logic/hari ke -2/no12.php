<?php

$berat_badan = 44;
$tinggi_badan = 148;
$imt = $berat_badan / ($tinggi_badan / 100) ** 2;
$kategori;



if ($imt < 18.5) {
  echo 'berat badan kurang';
} else if ($imt >= 18.5 && $imt < 22.9) {
  echo 'normal';
} else if ($imt >= 22.9 && $imt < 24.9) {
  echo 'berat badan lebih';
} else {
    echo "Obesitas";
}