<<<<<<< HEAD
<?php
$totalBelanja = 154000;
$batasMinimal = 100000;
$diskonPersen = 7;

if ($totalBelanja >= $batasMinimal) {
    $diskon = $totalBelanja * ($diskonPersen / 100);
} else {
    $diskon = 0;
}

$totalPembayaran = $totalBelanja - $diskon;
echo "Total belanja: Rp " . number_format($totalBelanja) ;
echo " Diskon (7%): Rp " . number_format($diskon) ;
echo " Total yang harus dibayar oleh Andi: Rp " . number_format($totalPembayaran);
=======
<?php
$totalBelanja = 154000;
$batasMinimal = 100000;
$diskonPersen = 7;

if ($totalBelanja >= $batasMinimal) {
    $diskon = $totalBelanja * ($diskonPersen / 100);
} else {
    $diskon = 0;
}

$totalPembayaran = $totalBelanja - $diskon;
echo "Total belanja: Rp " . number_format($totalBelanja) ;
echo " Diskon (7%): Rp " . number_format($diskon) ;
echo " Total yang harus dibayar oleh Andi: Rp " . number_format($totalPembayaran);
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
?>