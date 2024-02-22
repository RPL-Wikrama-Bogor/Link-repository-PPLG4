<?php 

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$grup1 = array_intersect($bil1, $bil2);
$grup2 = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

echo "Kelompok Pertama: ";
foreach ($grup1 as $nilai) {
    echo "$nilai ";
}

echo "\nKelompok Kedua: ";
foreach ($grup2 as $nilai) {
    echo "$nilai ";
}
?>