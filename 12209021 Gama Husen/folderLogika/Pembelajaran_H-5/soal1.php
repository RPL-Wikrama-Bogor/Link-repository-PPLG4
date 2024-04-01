<?php 
$angka = 1000;
$bagi = [3,5,7, 10];
$bisaDibagi = array();
$result1 = pembagian($angka, $bagi);
$result2 = cetak($bisaDibagi, $angka, $bagi);



function pembagian($angka, $bagi){
    global $bisaDibagi;
    foreach ($bagi as $key) {
        if ($angka % $key == 0) {
            $bisaDibagi[] = $key;
        }
    }
}
function cetak($bisaDibagi, $angka, $bagi){
    echo 'Dari angka: ';
    print_r($bagi);
    echo '<br>';
    echo '<br>';
    foreach ($bisaDibagi as $key) {
        echo $angka . ' hanya bisa dibagi dengan angka:  ' . $key . '  <br>';
    }
}