<?php

$barang = [
[    'nama' => 'Ban ',
    'diskon' => 10,
],
[
    'nama' => 'Oli mesin ',
],
[
    'nama' => 'kampas rem',
],
[
    'nama' => 'Busi ',
    'diskon' => 9,
],
[
    'nama' => 'Akumulator ',
    'diskon' => 7,
],
];

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo $item['nama'] . $item['diskon'];
    }
}