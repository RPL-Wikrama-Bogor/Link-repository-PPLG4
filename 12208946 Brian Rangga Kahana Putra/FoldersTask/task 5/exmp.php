<?php 

function kerja($kerja){
    $istirahat = 20;
    $sementara = 30;

    $total = $istirahat + $sementara;
    $hasilMenit = ($kerja * 60) - $total;
    $hasilJam = $hasilMenit / 60;

    return array('hasil' => $hasilJam, 'total' => $total ); // Mengembalikan hasil dalam jam dan total istirahat dalam jam
}

function output($data){
    echo "Kerja: " . $data['hasil'] . " jam, Istirahat: " . $data['total'] . " menit";
}

$a = 8;
$kerja = kerja($a);
output($kerja);