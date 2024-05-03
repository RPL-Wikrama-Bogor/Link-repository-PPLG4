<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok1 = array_intersect($bil1, $bil2);
$kelompokBil1 = array_diff($bil1, $bil2);
$kelompokBil2 = array_diff($bil2, $bil1);
$kelompok2 = array_merge($kelompokBil1, $kelompokBil2);

echo "Kelompok pertama: " . implode(', ', $kelompok1) . "\n";
echo "Kelompok kedua: " . implode(', ', $kelompok2);
?>