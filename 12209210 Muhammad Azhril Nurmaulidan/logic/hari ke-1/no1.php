<?php
$tahun = date("Y");
$andi = 16;
$beni = $andi + 3;
$dani = $beni - 3;
$eko = $beni - 5;

echo "Tahun kelahiran Andi: " . ($tahun - $andi) . " <br>";
echo "Tahun kelahiran Beni: " . ($tahun - $beni) . " <br>" ;
echo "Tahun kelahiran Dani: " . ($tahun - $dani) . " <br>";
echo "Tahun kelahiran Eko: " . ($tahun - $eko) . " <br> <br>";

if ($andi % 4 == 0) {
    echo "Andi lahir di tahun kabisat <br>";
} else {
    echo "Andi tidak lahir di tahun kabisat <br>";
}

if ($beni % 4 == 0) {
    echo "Beni lahir di tahun kabisat <br>";
} else {
    echo "Beni tidak lahir di tahun kabisat <br>";
}

if ($dani % 4 == 0) {
    echo "Dani lahir di tahun kabisat <br>";
} else {
    echo "Dani tidak lahir di tahun kabisat <br>";
}

if ($eko % 4 == 0) {
    echo "Eko lahir di tahun kabisat <br>";
} else {
    echo "Eko tidak lahir di tahun kabisat <br>";
}