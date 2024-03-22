Soal |
<br>
<?php

function hitungPembagian($angka) {
    $hasilPembagian = [];

    if ($angka % 3 === 0) {
        $hasilPembagian[] = 3;
    }

    if ($angka % 5 === 0) {
        $hasilPembagian[] = 5;
    }

    if ($angka % 7 === 0) {
        $hasilPembagian[] = 7;
    }

    if ($angka % 10 === 0) {
        $hasilPembagian[] = 10;
    }

    return $hasilPembagian;
}

function cetakHasil($angka) {
    $hasilPembagian = hitungPembagian($angka);

    if (empty($hasilPembagian)) {
        echo "Angka $angka tidak bisa dibagi dengan 3, 5, 7, atau 10.\n";
    } else {
        echo "Angka $angka bisa dibagi dengan angka " . implode(' dan ', $hasilPembagian) . ".\n";
    }
}

$angka = 1000;
cetakHasil($angka);

?>
<br>
====================================================
<br>
Soal 2 |
<br>
<?php

function hitungTotalWaktu($jamKerjaPerHari, $istirahatSholat, $istirahatMakan) {

    $waktuKerjaPerHari = $jamKerjaPerHari * 60;

    $totalWaktuIstirahatSholat = $istirahatSholat * 5;

    $totalWaktuIstirahatMakan = $istirahatMakan * 3;

    $totalWaktuIstirahat = $totalWaktuIstirahatSholat + $totalWaktuIstirahatMakan;

    $totalWaktuKerja = $waktuKerjaPerHari;

    $jamKerja = floor($totalWaktuKerja / 60);

    $menitIstirahatSholat = $totalWaktuIstirahatSholat % 40;

    $menitIstirahatMakan = $totalWaktuIstirahatMakan % 60;

    return [
        'jamKerja' => "$jamKerja jam",
        'menitIstirahatSholat' => "$menitIstirahatSholat menit",
        'menitIstirahatMakan' => "$menitIstirahatMakan menit",
        'totalWaktuIstirahat' => "$totalWaktuIstirahat menit"
    ];
}

$jamKerjaPerHari = 8 ; 
$istirahatSholat = 20; 
$istirahatMakan = 30; 

$hasilWaktu = hitungTotalWaktu($jamKerjaPerHari, $istirahatSholat, $istirahatMakan);

echo "Total Waktu Kerja: " . $hasilWaktu['jamKerja'] . "<br>";
echo "Total Waktu Istirahat Sholat: " . $hasilWaktu['menitIstirahatSholat'] . "<br>";
echo "Total Waktu Istirahat Makan: " . $hasilWaktu['menitIstirahatMakan'] . "<br>";
echo "Total Waktu Istirahat: " . $hasilWaktu['totalWaktuIstirahat'];
?>
<br>
====================================================
<br>
Soal 3 |
<br>
<?php

function hitungSuku($a, $n) {
    return $a * 4 + $n * 3;
}

$a = 9;
$jumlahSuku = 12;

$suku = array();

foreach (range(1, $jumlahSuku) as $n) {
    $suku[] = hitungSuku($a, $n);
}

echo "Suku pertama sampai ke-$jumlahSuku dari rumus (a times 4 + n times 3) dengan (a = $a) = <br>";
echo implode(', ', $suku);

?>

