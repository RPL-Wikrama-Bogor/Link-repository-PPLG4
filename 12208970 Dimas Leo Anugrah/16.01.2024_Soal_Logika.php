Soal 1 |
<br>
<?php
$nilai = 83;
if ($nilai >= 73 && $nilai <= 83) {
    echo "Selamat Andi nilai andi lulus";
} else {
    echo "Nilai Andi tidak kompetent ";
}
?>

<br>
-------------------------
<br>
Soal 2 |
<br>
<?php
$a = '7';

if (is_numeric($a)) {
    echo "\$a";
    var_dump($a);
} elseif (is_string($a)) {
    echo "\$a";
    var_dump($a);
}

?>
<br>
------------------------------
<br>
Soal 3 |
<br>
<?php
$b = '';

if (isset($b)) {
    echo "Variabel b Terisi nilai.";
} else {
    echo "Variabel b null.";
}

if (empty($b)) {
    echo "Variabel b null.";
} else {
    echo "Variabel b Terisi nilai.";
}
?>
<br>
--------------------------------
<br>
Soal 4 |
<br>
<?php

$nilaiUjian = 90;

if ($nilaiUjian > 90) {
    $predikat = 'A';
} elseif ($nilaiUjian >= 75 && $nilaiUjian <= 90) {
    $predikat = 'B';
} else {
    $predikat = 'C';
}

echo "Nilai ujian: $nilaiUjian<br>";
echo "Predikat: $predikat";

?>
<br>
-----------------------------------------
<br>
soal 5 |
<br>
<?php

function hitungHargaSetelahDiskon($totalBelanja, $batasDiskon, $persentaseDiskon)
{
    if ($totalBelanja >= $batasDiskon) {
        $diskon = $totalBelanja * ($persentaseDiskon / 100);
        $hargaSetelahDiskon = $totalBelanja - $diskon;
        return $hargaSetelahDiskon;
    } else {
        return $totalBelanja;
    }
}

$totalBelanjaAndi = 154000;
$batasDiskon = 100000;
$persentaseDiskon = 7;

$hargaYangHarusDibayar = hitungHargaSetelahDiskon($totalBelanjaAndi, $batasDiskon, $persentaseDiskon);

echo "Harga yang harus dibayar oleh Andi setelah diskon: Rp." . number_format($hargaYangHarusDibayar, '2', ',', '.');
?>
<br>
----------------------------------------------------
<br>
Soal 6 |
<br>
<?php




?>
<br>
----------------------------------------------------
<br>
Soal 7|
<br>
<?php




?>
<br>
------------------------------------------------------------
<br>
Soal 8 |
<br>
<?php

$usia_andi = 1 / 4 * 100;
$nilai_matematika = 87;
$nilai_bahasa_inggris = 85;
$nilai_bahasa_indonesia = 87;

$usia_minimal = 25;
$usia_maksimal = 25;
$nilai_matematika_minimal = 87;
$nilai_bahasa_inggris_minimal = 85;
$nilai_bahasa_indonesia_minimal = 87;
$rata_rata_minimal = 85;

$status = ($usia_andi >= $usia_minimal && $usia_andi <= $usia_maksimal &&
    $nilai_matematika >= $nilai_matematika_minimal &&
    $nilai_bahasa_inggris >= $nilai_bahasa_inggris_minimal &&
    $nilai_bahasa_indonesia >= $nilai_bahasa_indonesia_minimal &&
    ($nilai_matematika + $nilai_bahasa_inggris + $nilai_bahasa_indonesia) / 3 >= $rata_rata_minimal) ? "Diterima" : "Ditolak";

if ($status === "Diterima") {
    echo "Selamat, Andi memnuhi syarat untuk ikatan dinas.";
} else {
    echo "Maaf, Andi tidak memenuhi syarat untuk ikatan dinas.";
}

?>
<br>
------------------------------------------------------------
<br>
Soal 9|
<br>
<?php
function hitungIMT($beratBadan, $tinggiBadan) {
    $tinggiMeters = $tinggiBadan / 100;
    $imt = $beratBadan / ($tinggiMeters * $tinggiMeters);
    return $imt;
}

function kategoriBeratBadan($imt) {
    if ($imt < 16.5) {
        return "Berat Badan Kurang";
    } elseif ($imt >= 18.5 && $imt < 22.9) {
        return "Normal";
    } elseif ($imt >= 22.9 && $imt < 24.9) {
        return "Berat Badan Lebih";
    } elseif ($imt >= 25) {
        return "Obesitas";
    }
}

$beratBeni = 44; // dalam kg
$tinggiBeni = 148; // dalam cm


$imtBeni = hitungIMT($beratBeni, $tinggiBeni);

$kategoriBeni = kategoriBeratBadan($imtBeni);

echo "Berat Badan Beni: $beratBeni kg<br>";
echo "Tinggi Badan Beni: $tinggiBeni cm<br>";
echo "IMT Beni: $imtBeni<br>";
echo "Kategori Berat Badan Beni: $kategoriBeni";
?>


