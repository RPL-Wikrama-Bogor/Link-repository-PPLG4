<?php
$usiaAndi = 25;
$mtkAndi = 83;
$indonesiaAndi = 87;
$inggrisAndi = 86;

$usiaMin = 16;
$usiaMax = 25;
$mtkMin = 87;
$indonesiaMin = 87;
$inggrisMin = 85;
$rataRata = 85;

if ($usiaAndi >= $usiaMin && $usiaAndi <= $usiaMax &&
    $mtkAndi >= $mtkMin &&
    $indonesiaAndi >= $indonesiaMin &&
    $inggrisAndi >= $inggrisMin &&
    ($mtkAndi + $indonesiaAndi + $inggrisAndi) / 3 >= $rataRata) {
    echo "Anda diterima dalam ikatan dinas";
} else {
    echo "Anda ditolak dalam ikatan dinas";
}
?>
