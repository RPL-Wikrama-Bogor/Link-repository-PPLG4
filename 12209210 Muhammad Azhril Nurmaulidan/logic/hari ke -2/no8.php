<<<<<<< HEAD
<?php

$andi_belanja = 154000;
$hasil;
$total;

if ($andi_belanja > 100000) {
    $hasil = ($andi_belanja / 100) * 7;
    $total = $andi_belanja - $hasil;
    echo "harga yang harus dibayar andi adalah $hasil";
} else {
    $hasil = 154000;
    echo "harga yang harus dibayar andi adalah $hasil";
=======
<?php

$andi_belanja = 154000;
$hasil;
$total;

if ($andi_belanja > 100000) {
    $hasil = ($andi_belanja / 100) * 7;
    $total = $andi_belanja - $hasil;
    echo "harga yang harus dibayar andi adalah $hasil";
} else {
    $hasil = 154000;
    echo "harga yang harus dibayar andi adalah $hasil";
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
}