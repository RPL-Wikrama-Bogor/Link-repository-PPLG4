<?php
function hitung_gaji($golongan, $jam_kerja) {
    $gaji_per_jam = array(
        1 => 3000,
        2 => 3500,
        3 => 4000, 
        4 => 5000
    );

    if(!array_key_exists($golongan, $gaji_per_jam)) {
        echo "Golongan Tidak Valid";
        return;
    }

    $jam_normal = min($jam_kerja,40);
    $jam_lembur = max(0,$jam_kerja - 40);

    $gaji_normal = $gaji_per_jam[$golongan] * $jam_normal * 7;
    $gaji_lembur = 1.5 * $gaji_per_jam[$golongan] * $jam_lembur * 7;
    $gaji_mingguan = $gaji_normal + $gaji_lembur;
    return $gaji_mingguan;
}

$gaji = hitung_gaji(2,45);
echo "Gaji mingguan untuk golongan 2 dengan 45 jam kerja perhari adalah  $gaji Rupiah" ;
?>