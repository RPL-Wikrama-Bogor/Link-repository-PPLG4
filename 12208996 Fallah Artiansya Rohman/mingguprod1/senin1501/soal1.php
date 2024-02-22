<?php

$tahunSekarang = 2024; 
$usiaHiragi = 16;

$tahunLahirhiragi = $tahunSekarang - $usiaHiragi;
$tahunLahirDani = $tahunLahirhiragi; 
$usiaBeni = $usiaHiragi + 3;
$tahunLahirBeni = $tahunSekarang - $usiaBeni;
$usiaEko = $usiaBeni - 5; 
$tahunLahirEko = $tahunSekarang - $usiaEko;

function apakahTahunKabisat($tahun) {
    return ($tahun % 4 == 0) && ($tahun % 100 != 0 || $tahun % 400 == 0);
}

$hiragiLahirTahunKabisat = apakahTahunKabisat($tahunLahirhiragi) ? "Ya" : "Tidak";
$ekoLahirTahunKabisat = apakahTahunKabisat($tahunLahirEko) ? "Ya" : "Tidak";

echo "Tahun kelahiran hiragi: $tahunLahirhiragi - Tahun Kabisat: $hiragiLahirTahunKabisat\n";
echo "Tahun kelahiran Beni: $tahunLahirBeni\n";
echo "Tahun kelahiran Dani: $tahunLahirDani\n";
echo "Tahun kelahiran Eko: $tahunLahirEko - Tahun Kabisat: $ekoLahirTahunKabisat\n";


if ($hiragiLahirTahunKabisat == "Ya" && $ekoLahirTahunKabisat == "Tidak") {
    echo "hiragi lahir di tahun kabisat, tetapi Eko tidak.\n";
} elseif ($hiragiLahirTahunKabisat == "Tidak" && $ekoLahirTahunKabisat == "Ya") {
    echo "Eko lahir di tahun kabisat, tetapi hiragi tidak.\n";
} else {
    echo "Baik hiragi maupun Eko tidak lahir di tahun kabisat.\n";
}
?>
