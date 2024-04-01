<<<<<<< HEAD
<?php
$bilangan = 90;
$mulai = 3;
$akhir = 30;
$jumlah_pembagian = 0;

for ($i = $mulai; $i <= $akhir; $i += 3) {
    if ($bilangan % $i == 0) {
        $jumlah_pembagian++;
    }
}
echo "Bilangan $bilangan dapat dibagi habis dengan bilangan kelipatan 3 sebanyak $jumlah_pembagian kali";
=======
<?php
$bilangan = 90;
$mulai = 3;
$akhir = 30;
$jumlah_pembagian = 0;

for ($i = $mulai; $i <= $akhir; $i += 3) {
    if ($bilangan % $i == 0) {
        $jumlah_pembagian++;
    }
}
echo "Bilangan $bilangan dapat dibagi habis dengan bilangan kelipatan 3 sebanyak $jumlah_pembagian kali";
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
?>