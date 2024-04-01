<<<<<<< HEAD
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
=======
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
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
?>