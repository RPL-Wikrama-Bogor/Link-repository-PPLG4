Tugas Nomor 1|
<?php
$usiaAndi = 16;
$usiaDani = $usiaAndi;
$usiaBeni = $usiaDani + 3;
$usiaEko = $usiaBeni - 5;

$tahunSekarang = date('Y');
$tahunKelahiranAndi = $tahunSekarang - $usiaAndi;
$tahunKelahiranDani = $tahunSekarang - $usiaDani;
$tahunKelahiranBeni = $tahunSekarang - $usiaBeni;
$tahunKelahiranEko = $tahunSekarang - $usiaEko;

$orang = array(
    "Andi" => $tahunKelahiranAndi,
    "Dani" => $tahunKelahiranDani,
    "Beni" => $tahunKelahiranBeni,
    "Eko" => $tahunKelahiranEko
);

$jarak = array();
foreach ($orang as $nama => $tahunKelahiran) {
    echo "Tahun kelahiran $nama: $tahunKelahiran\n";

    if ($tahunKelahiran % 4 == 0) {
        echo "$nama lahir pada tahun kabisat <br>";
    } else {
        echo "$nama tidak lahir pada tahun kabisat <br>";
    }
}

?>
<---------------------------------------------------------------------------------------------->