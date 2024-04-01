<?php
$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77, 99, 55, 81, 45, 90 ,91, 98];

$semua = array_merge($bil1, $bil2);
$kelompok1 = array_intersect($bil1, $bil2);
$filter1 = array_diff($bil1, $bil2);
$filter2 = array_diff($bil2, $bil1);
$kelompok2 = array_merge($filter1, $filter2);


echo "<b>Semua Data: </b>";

print_r($semua);
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<b>Kelompok1: (hanya bilangan yang sama) </b>";
print_r($kelompok1);
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<b>Kelompok2: (bilangan yang tidak sama di antara 2 array) </b>";

print_r($kelompok2);











