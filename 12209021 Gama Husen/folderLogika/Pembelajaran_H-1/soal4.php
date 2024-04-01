<?php
$tinggi = 148 / 100;
$tinggi *= $tinggi;
$kategoriImt = 44 / $tinggi;
echo $kategoriImt;
echo "<br>";

if ($kategoriImt <= 18.5) {
    echo "berat badan kurang";
} elseif ($kategoriImt <= 22.9) {
    echo "berat badan normal";
} elseif ($kategoriImt <= 24.9) {
    echo "berat badan lebih";
} elseif ($kategoriImt >= 25) {
    echo "berat badan obesitas";
} else {
    echo "ngawur";
}
