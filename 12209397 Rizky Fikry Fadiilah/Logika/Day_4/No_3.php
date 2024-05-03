<?php
$barang = [
  [
    'nama' => 'Ban',
    'diskon' => 10,
  ],
  [
    'nama' => 'Oli Mesin',
  ],
  [
    'nama' => 'Kampas Rem'
  ],
  [
    'nama' => 'Busi',
    'diskon' => 9,
  ],
  [
    'nama' => 'akumulator',
    'diskon' => 7,
  ],
];

foreach ($barang as $nama) {
  if (isset($nama['diskon'])) {
    echo 'Nama barang: ' . $nama['nama'] . ', Diskon: ' . $nama['diskon'] . "%" . "\n";
  }
}
?>