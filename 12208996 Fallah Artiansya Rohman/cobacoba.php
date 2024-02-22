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
        echo $angka . ' hanya bisa dibagi dengan angka :  ' . $key . '  <br>';
    }
}

















<p>No 2 gunakan fungsi untuk menghitung waktu istirahat, dan waktu kerja pegawai selama jam kerja 8 jam perhari, dengan 20 menit jam istirahat shalat dan 30 menit jam istirahat makan</p>
<?php
function hitung_waktu($jam_kerja, $istirahat_shalat, $istirahat_makan) {
    $waktu_kerja = $jam_kerja - ($istirahat_shalat + $istirahat_makan);
    $waktu_istirahat = $istirahat_shalat + $istirahat_makan;
    return array($waktu_kerja, $waktu_istirahat);
}

function cetak_hasil($hasil) {
    echo "Waktu kerja pegawai adalah " . $hasil[0] . " jam per hari.\n";
    echo "Waktu istirahat pegawai adalah " . $hasil[1] . " menit per hari.";
}

$jam_kerja = 8; 
$istirahat_shalat = 20; 
$istirahat_makan = 30; 

$jam_kerja *= 60;

$hasil = hitung_waktu($jam_kerja, $istirahat_shalat, $istirahat_makan);
cetak_hasil($hasil);
?>

no 3<p>gunakan fungsi untuk menghitung suku pertama sampai 12 dari rumus a*4+n*3 dengan a = 9</p>
<?php
function hitungSuku($n) {
    $a = 9;
    return $a*4 + $n*3;
}

for ($i = 1; $i <= 12; $i++) {
    echo "Suku ke-$i: " . hitungSuku($i) . "\n";
}
?>
