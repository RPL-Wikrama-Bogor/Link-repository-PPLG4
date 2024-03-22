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
<--------------------------------------------------------------------------------------------- <br>
    Tugas Nomor 2|
    <?php
    $jPeserta = 120;
    $lomba = "web app";
    $pendidikan = "smk";
    $tahunPelaksanaan = date('y');

    if ($pendidikan == "smp") {
        $tingkat = "P";
    } else {
        $tingkat = "A";
    }


    if ($lomba == "web app") {
        $kode = "01W";
    } elseif ($lomba == "android") {
        $kode = "02A";
    } elseif ($lomba == "game") {
        $kode = "03G";
    }
    echo "Nomor Peserta Eka Ialah = " . ($jPeserta + 1) . $kode . $tingkat . $tahunPelaksanaan;

    ?>
    <br>
    <-------------------------------------------------------------------------------------------- <br>
        Tugas Nomor 3|
        <?php
        $panjangTanah = 13;
        $lebarTanah = 9;

        $luasTanah = $panjangTanah * $lebarTanah;

        if ($luasTanah < 90) {
            $tipeRumah = "Tipe 36";
        } elseif ($luasTanah >= 90 && $luasTanah <= 96) {
            $tipeRumah = "Tipe 45";
        } elseif ($luasTanah > 96 && $luasTanah <= 120) {
            $tipeRumah = "Tipe 54";
        } elseif ($luasTanah > 120 && $luasTanah <= 150) {
            $tipeRumah = "Tipe 60";
        } else {
            $tipeRumah = "Tipe 70";
        }

        echo "Luas tanah: $luasTanah m2 <br>";
        echo "Tipe rumah yang cocok untuk luas tanah : $tipeRumah\n";
        ?>
        <br>
        <--------------------------------------------------------------------------------------------