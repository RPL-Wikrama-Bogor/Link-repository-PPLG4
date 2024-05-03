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

echo "Sudah kompeten: " . implode(', ',$kompeten) . "\n";
echo "Belum kompeten: " . implode(', ', $belumKompeten);
?>