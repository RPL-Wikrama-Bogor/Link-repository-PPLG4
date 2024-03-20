<?php 

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];
$kelompok_pertama = array_intersect($bil1, $bil2);
$kelompok_kedua = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

echo "Kelompok Pertama: ";
foreach ($kelompok_pertama as $nilai) {
    echo "$nilai ";
}
echo"<br>";
echo "\nKelompok Kedua: ";
foreach ($kelompok_kedua as $nilai) {
    echo "$nilai ";
}