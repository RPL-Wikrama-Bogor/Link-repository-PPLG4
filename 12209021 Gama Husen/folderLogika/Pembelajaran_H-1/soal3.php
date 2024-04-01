<?php 
$tipeRumahDani = 13 * 9;
if ($tipeRumahDani < 90) {
    echo "Tipe Rumah Dani adalah: Tipe 36";
} elseif($tipeRumahDani >= 90 && $tipeRumahDani < 96){
    echo "Tipe Rumah Dani adalah: Tipe 45";
}elseif($tipeRumahDani >= 96 && $tipeRumahDani < 120){
    echo "Tipe Rumah Dani adalah: Tipe 54";
}
elseif($tipeRumahDani >= 120 && $tipeRumahDani < 150){
    echo "Tipe Rumah Dani adalah: Tipe 60";
} else {
    echo "Tipe Rumah Dani adalah: Tipe 70";
}
