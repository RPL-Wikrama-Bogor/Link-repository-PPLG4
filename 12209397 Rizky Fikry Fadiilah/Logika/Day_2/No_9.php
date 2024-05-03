<?php
$beratBadanBeni = 44;
$tinggiBadanBeni = 148;
$kategoriBeni = hitungIMT($beratBadanBeni, $tinggiBadanBeni);

function hitungIMT($beratBadan, $tinggiBadan) {
    $tinggiBadanMeter = $tinggiBadan / 100;
    $imt = $beratBadan / ($tinggiBadanMeter * $tinggiBadanMeter);

    if ($imt < 18.5) {
        return "Berat badan kurang";
    } elseif ($imt >= 18.5 && $imt < 22.9) {
        return "Normal";
    } elseif ($imt >= 22.9 && $imt < 24.9) {
        return "Berat badan lebih";
    } else {
        return "Obesitas";
    }
}

echo "Beni termasuk dalam kategori: " . $kategoriBeni;
?>