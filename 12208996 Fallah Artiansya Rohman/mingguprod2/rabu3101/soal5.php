<?php
function hitungBahanBakar($jarak) {
    $bahanBakar = 10; // bahan bakar untuk km pertama
    $totalBahanBakar = $bahanBakar;

    for ($i = 2; $i <= $jarak; $i++) {
        $bahanBakar *= 0.8; // bahan bakar berkurang 20% setiap km
        $totalBahanBakar += $bahanBakar;
    }

    return round($totalBahanBakar, 2);
}

$jarak = 100; 

$totalBahanBakar = hitungBahanBakar($jarak);

echo "Total bahan bakar yang dihabiskan setelah mencapai " . $jarak . " km adalah " . $totalBahanBakar . " kg";
?>
