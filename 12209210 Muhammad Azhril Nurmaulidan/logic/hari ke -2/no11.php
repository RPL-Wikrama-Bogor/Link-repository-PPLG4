<?php
// $nama = [
//     "nama" => "Andi",
//     "usia" => 16
// ];

// mencetak isi array assosiatif
// echo "<h2>".$student["nama"]."</h2>";

// $nilai_minimum 	= [25];
// $max 	= max($nilai);
// $min 	= min($nilai);
// echo $max;
// echo "<br />";
// echo $min;

$usia   = 25;
$mtk 	= 87;
$ing 	= 85;
$ind 	= 87;
$rata_nilai = 85;

$rata_nilai = ($mtk + $ing + $ind) / 3; 

if($usia >= 16 && $usia <= 25) {
    if ($rata_nilai >= $rata_nilai) {
        if ($mtk >= 87) { 
            if ($ind >= 85) {
                echo "terpenuhi";
            } else {
                echo 'tidak terpenuhi';
            }
        } else {
            echo 'tidak terpenuhi';
        }
    } else {
        echo 'tidak terpenuhi';
    }
} else {
    echo 'tidak terpenuhi';
}