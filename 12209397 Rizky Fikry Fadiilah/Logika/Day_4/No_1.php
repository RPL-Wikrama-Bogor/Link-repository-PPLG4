<<<<<<< HEAD
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
=======
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
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
?>