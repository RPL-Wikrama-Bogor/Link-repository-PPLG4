<?php

$barang = [
    [
        'nama' => 'ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'oli mesin',
    ],
    [
        'nama' => 'kampas rem',
    ],
    [
        'nama' => 'busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'akumulator',
        'diskon' => 7,
    ]
];

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo 'Nama: ' . $item['nama'] . ', Diskon: ' . $item['diskon'] . "%\n";
    }
}

?>
