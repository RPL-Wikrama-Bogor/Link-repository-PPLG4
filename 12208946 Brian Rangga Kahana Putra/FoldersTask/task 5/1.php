<?php
function angka($a){
    $hasil = array();
    foreach($a as $angka){
        if (1000 % $angka == 0) {
            $hasil[] = $angka;
        }
    }
    return $hasil;
}

function output($hasil){
    if(!empty($hasil)) {
        echo "Yang bisa dibagi: " . implode(', ', $hasil);
    } else {
        echo "Tidak ada angka yang bisa membagi 1000.";
    }
}

$a = ['3', '5', '7', '10'];
$hasil = angka($a);
output($hasil);