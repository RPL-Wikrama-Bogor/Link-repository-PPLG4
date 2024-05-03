<?php
$a = 9;
$sukuArray = [];
for ($n = 1; $n <= 12; $n++) {
    $sukuArray[] = hitungSuku($a, $n);
}

function hitungSuku($a, $n) {
    return $a * 4 + $n * 3;
}

echo '[' . implode(', ', $sukuArray) . ']';
?>