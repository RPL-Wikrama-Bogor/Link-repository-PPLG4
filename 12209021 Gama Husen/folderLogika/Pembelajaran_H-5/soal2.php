<?php 
$waktu = [
    'jam_kerja' => 8,
    'waktu_istirahat' => [30 , 20],
];

// print_r($waktu);
// echo "<br>";
// var_dump($waktu);
// echo "<br>";


$result = cetakJam($waktu);

function cetakJam($waktu){
    $sum = round(array_sum($waktu['waktu_istirahat']) / 60, 2);
    $sum2 = round($waktu['jam_kerja'] - $sum, 0);
    $sum3 = $waktu['jam_kerja'] - $sum;
    $sisaDecimal = fmod($sum3, 1) * 100;

    
    echo 'Dari total waktu Jam kerja selama: '. $waktu['jam_kerja']. ' jam. <br>maka total istirahat pekerja tersebut adalah: ' .  array_sum($waktu['waktu_istirahat']) . ' menit atau ' . $sum . ' jam. <br> maka total jam kerja tersebut dikurangi dengan waktu istirahat adalah: ' . $sum2 . 'jam ' . $sisaDecimal . 'menit </br>';
    
}