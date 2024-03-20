<?php

$angka = [75, 77, 87, 70, 90, 81, 69, 87, 66];

foreach ($angka as $nilai) {
    if ($nilai >= 75) {
        echo "Nilai kompeten adalah $nilai <br>";
    } else {
        echo "Nilai tidak kompeten adalah $nilai <br>";
    }
}