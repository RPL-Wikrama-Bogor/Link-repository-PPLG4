<?php

    $string = [
        [
            'nama' => 'Ban',
            'diskon' => '10',
        ],
        [
            'nama' => 'Oli Mesin'
        ],
        [
            'nama' => 'Kampas Rem',
        ],
        [
            'nama' => 'Busi',
            'diskon' => '9',
        ],
        [
            'nama' => "akumulator",
            'diskon' => '1',
        ]
    ];

    $diskon = array();

    foreach($string as $file){
        if(isset($file['diskon']) ){
            echo "Nama Barang : {$file['nama']} </br> Dengan Harga : {$file['diskon']}<hr>";
        }
    }
  