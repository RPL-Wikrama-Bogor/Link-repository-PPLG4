<?php
$barang = [
    [ 
        'nama' => "Ban",
        'diskon' => 10,
    ],
    [
        'nama' => "Oli Mesin",
    ],
    [
        'nama' => "Kampas Rem",
    ],
    [
        'nama' => "Busi",
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
];

foreach($barang as $item) {
    if(isset($item['diskon'])) {
        echo $item['nama'] . ' Diskon: ' . $item['diskon'] . '%' . PHP_EOL;
        echo '</br>';
    }
}

?>