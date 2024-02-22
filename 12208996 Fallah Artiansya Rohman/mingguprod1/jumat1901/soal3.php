<?php
function hitung_suku($n){
    $a = 9;
    return $a*4 + $n*3;
}

for($i = 1; $i <= 12; $i++) {
    echo "suku ke-$i : " . hitung_suku($i) . "<br>";
}
?>