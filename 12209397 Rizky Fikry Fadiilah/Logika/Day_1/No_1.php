<?php
$usiaAndi = 16;
$usiaBeni = $usiaAndi + 3;
$usiaDani = $usiaAndi;
$tahunKelahiranDani = date('Y') - $usiaDani;
$usiaEko = $usiaDani - 5;
$tahunKelahiranDani = date('Y') - $usiaAndi;
$tahunKelahiranBeni = date('Y') - $usiaDani + 3;
$tahunKelahiranEko = date('Y') - $usiaEko;

function isKabisat($tahun)
{
    return (($tahun % 4 == 0) && ($tahun % 100 != 0)) || ($tahun % 400 == 0);
}

echo "Tahun kelahiran Andi: " . (date('Y') - $usiaAndi) . " (";
echo isKabisat(date('Y') - $usiaAndi) ? "Kabisat" : "Bukan Kabisat";
echo ")\n";

echo "Tahun kelahiran Dani: " . $tahunKelahiranDani . " (";
echo isKabisat($tahunKelahiranDani) ? "Kabisat" : "Bukan Kabisat";
echo ")\n";

echo "Tahun kelahiran Beni: " . $tahunKelahiranBeni . " (";
echo isKabisat($tahunKelahiranBeni) ? "Kabisat" : "Bukan Kabisat";
echo ")\n";

echo "Tahun kelahiran Eko: " . $tahunKelahiranEko . " (";
echo isKabisat($tahunKelahiranEko) ? "Kabisat" : "Bukan Kabisat";
echo ")\n";
?>