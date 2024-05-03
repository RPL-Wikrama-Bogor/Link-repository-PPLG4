<?php
$array1 = array(1, 3);
$array2 = array(1, 10);

function perkalian($item1, $item2) {
    $hasil = $item1 * $item2;
    return "$item1 x $item2 = $hasil";
}
$hasilPerkalian = array_map(
    function ($item1) use ($array2) {
        return array_map(
            function ($item2) use ($item1) {
                return perkalian($item1, $item2);
            },
            $array2
        );
    },
    $array1
);
foreach ($hasilPerkalian as $hasilFaktor1) {
    foreach ($hasilFaktor1 as $hasil) {
        echo $hasil . "\n";
    }
}
?>