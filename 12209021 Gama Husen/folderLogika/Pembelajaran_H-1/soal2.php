<?php
$pendidikan = [
    'SMP' => 'P',
    'SMA' => 'A', 
];

$kategori = [
    "Web App" => "01W",
    "Android" => "02A",
    "Game" => "03G",
];

$tahun = 24;

$data = [
    [
        "nama" => "Eko",
        "kategori" => $kategori['Web App'],
        "pendidikan" => $pendidikan['SMA'],
        "daftarUrut" => 121
    ],
    [
        "nama" => "Gama",
        "kategori" => $kategori['Game'],
        "pendidikan" => $pendidikan['SMP'],
        "daftarUrut" => 122
    ],
];

foreach ($data as $key) {
    echo "Diketahui dari masing masing peserta yang bernama <b>". $key['nama'] . "</b> Memiliki Nomor Peserta: <b>" .  $key['daftarUrut'] .  $key['kategori'] . $key['pendidikan'] . $tahun; echo "</b><br>";
}