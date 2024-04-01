<<<<<<< HEAD
<?php
$tahun = date("Y");
$peserta = 121;
$tingkatPendidikan = "A";
$kategoriLomba = "01W"; 
$nomorPeserta;

function generateNomorPeserta($urutan, $kategori, $tingkat, $tahun) {
    $tahunPelajaran = substr($tahun, -2);   

    if ($kategori === "01W" || $kategori === "02A" || $kategori === "03G") {
        $nomorPeserta = $urutan . "-" . $kategori . "-" . $tingkat . "-" . $tahunPelajaran;
    } else {
        $nomorPeserta = "Kategori lomba tidak valid";
    }

    return $nomorPeserta;
}

$nomorPesertaEko = generateNomorPeserta($peserta, $kategoriLomba, $tingkatPendidikan, $tahun);

=======
<?php
$tahun = date("Y");
$peserta = 121;
$tingkatPendidikan = "A";
$kategoriLomba = "01W"; 
$nomorPeserta;

function generateNomorPeserta($urutan, $kategori, $tingkat, $tahun) {
    $tahunPelajaran = substr($tahun, -2);   

    if ($kategori === "01W" || $kategori === "02A" || $kategori === "03G") {
        $nomorPeserta = $urutan . "-" . $kategori . "-" . $tingkat . "-" . $tahunPelajaran;
    } else {
        $nomorPeserta = "Kategori lomba tidak valid";
    }

    return $nomorPeserta;
}

$nomorPesertaEko = generateNomorPeserta($peserta, $kategoriLomba, $tingkatPendidikan, $tahun);

>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
echo "Nomor peserta Eko adalah " . $nomorPesertaEko;