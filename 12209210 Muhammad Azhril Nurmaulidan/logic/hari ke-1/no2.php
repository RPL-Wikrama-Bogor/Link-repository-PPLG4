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

echo "Nomor peserta Eko adalah " . $nomorPesertaEko;