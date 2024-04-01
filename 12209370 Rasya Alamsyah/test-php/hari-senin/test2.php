<?php
$nomorPeserta = 121;
$mataLomba = "web app";
$pendidikan = "smk";
$tahunPelaksanaan = "2024";

function getKodeLomba($mataLomba) {
    switch(strtolower($mataLomba)) {
        case "web app":
            return "01W";
        case "android":
            return "02A";
        case "game":
            return "03G";
        default:
            return false;
    }
}


function getKodePendidikan($pendidikan) {
    switch(strtolower($pendidikan)) {
        case "smp":
            return "P";
        case "sma":
        case "smk":
        case "ma":
            return "A";
        default:
            return false;
    }
}

$kodeLomba = getKodeLomba($mataLomba);
$kodePendidikan = getKodePendidikan($pendidikan);

if($kodeLomba && $kodePendidikan) {
    $nomorPesertaEko = str_pad($nomorPeserta, 3, "0", STR_PAD_LEFT) . "-" . $kodeLomba . "-" . $kodePendidikan . "-" . $tahunPelaksanaan;
    echo "Nomor peserta Eko adalah: " . $nomorPesertaEko;
} else {
    echo "Kode mata lomba atau pendidikan tidak valid.";
}
?>