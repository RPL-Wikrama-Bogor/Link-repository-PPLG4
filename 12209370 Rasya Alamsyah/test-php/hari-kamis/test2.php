<?php


$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belumKompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Kelompok Pertama (Kompeten): " . implode(', ', $kompeten) . "\n";
echo "<br>";
echo "Kelompok Kedua (Belum Kompeten): " . implode(', ', $belumKompeten) . "\n";



?>
