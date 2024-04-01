<?php 


$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => "Oli Mesin",
    ],
    [
        'nama' => 'Kampas Mesin',
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
];


foreach ($barang as $key) {
    if (isset($key['diskon'])) {
        echo "Nama Barang: " .  $key['nama'] .' Diskon: '. $key['diskon'];
        echo "<br>";
    }
}