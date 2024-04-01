<?php 
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
$kompeten = array();
$tidakKompeten = array();

foreach ($bilangan as $key) {
    

    if ($key >= 75) {
        $kompeten[] = $key;
    } else {
        $tidakKompeten[] = $key;
    }

}

echo "<h3>Kelompok 1</h3>";
echo "<br>";
foreach ($kompeten as $key) {
    echo $key . " Nilai Kompeten";
    echo "<br>";
}

echo "<hr>";
echo "<h3>Kelompok 2</h3>";
echo "<br>";
foreach ($tidakKompeten as $key) {
    echo $key . " Nilai tidak kompeten";
    echo "<br>";

}



