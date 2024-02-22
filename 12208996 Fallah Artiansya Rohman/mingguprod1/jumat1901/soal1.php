<?php
$angka = 1000;
$bagi = [3,5,7, 10];
$bisaDibagi = array();
$result1 = pembagian($angka, $bagi);
$result2 = cetak_hasil($bisaDibagi, $angka, $bagi);

function pembagian($angka ,$bagi){
    global $bisaDibagi;
    foreach($bagi as $b){
        if($angka % $b == 0) {
            $bisaDibagi[] = $b;   
        }
    }
}

function cetak_hasil($bisaDibagi, $angka, $bagi){
    echo 'Dari angka: ';
    print_r($bagi);
    echo "<br>";
    echo "<br>";
    foreach($bisaDibagi as $bd) {
        echo $angka . " Angka bisa dibagi dengan angka: " . $bd . "<br>";
    }
}
?>