<?php
$angka = [1, 2, 3];
$angka2 = [1,2,3,4,5,6,7,8,9,10];

foreach ($angka2 as $key) {
    $result1 = $angka[0] * $key;
    echo $angka[0] . " x " . $key . " = " . $result1; 
    echo "<br>";
}
echo "<br>";
echo "<br>";


foreach ($angka2 as $key) {
    $result1 = $angka[1] * $key;
    echo $angka[1] . " x " . $key . " = " . $result1; 
    echo "<br>";
}
echo "<br>";
echo "<br>";

foreach ($angka2 as $key) {
    $result1 = $angka[2] * $key;
    echo $angka[2] . " x " . $key . " = " . $result1; 
    echo "<br>";
}