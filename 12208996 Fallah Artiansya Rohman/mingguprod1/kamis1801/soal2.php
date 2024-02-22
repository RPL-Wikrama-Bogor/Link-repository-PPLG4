<?php
$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$grup1 = array();
$grup2 = array();

foreach($bilangan as $value){
    if ($value >= 75) {
        $grup1[] = $value;
    }else {
        $grup2[] = $value;
    }
}

echo "Kelompok 1 diatas kkm :\n";
foreach ($grup1 as $value) {
    echo $value . "\n";
}

echo "Kelompok 2 dibawah kkm :\n";
foreach ($grup2 as $value) {
    echo $value . "\n";
}
?>