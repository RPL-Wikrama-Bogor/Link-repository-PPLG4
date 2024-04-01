<?php 

function kerja($kerja,$istirahat,$sementara ){
    
    $total = $istirahat + $sementara;
    $hasil = ($kerja * 60) - $total;
    $jam = floor($hasil / 60);
    $menit = $hasil % 60;
    echo "Jam Kerja Dalam Bentuk Menit : " . $hasil . " menit <br>";
    echo "Jam kerja : ". $jam . " jam $menit menit</br>";
    echo "Total Jam Istirahat : " . $total . " menit <br>";

}



$a = 8;
$istirahat = 20;
$sementara = 30;
$kerja = kerja($a,$istirahat ,$sementara );


