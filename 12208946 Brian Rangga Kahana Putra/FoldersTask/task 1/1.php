<?php 

    $andi = 16;
    $dani = $andi;
    $beni = $andi + 3;
    $eko = $beni - 5;
    $tahun = 2024;

    $thnandi = $tahun - $andi;
    $thndani = $tahun - $dani;
    $thnbeni = $tahun - $beni;
    $thneko = $tahun - $eko;

    echo "Umur andi : $andi lahir : $thnandi</br>";
    echo "Umur dani : $dani lahir : $thndani</br>";
    echo "Umur beni : $beni lahir : $thnbeni</br>";
    echo "Umur eko : $eko lahir : $thneko</br>";
    if(($tahun - $andi) % 4 == 0){
        echo "$andi Andi lahir tahun kabisat</br>"; 
    }else{
        echo "$andi Andi tidak lahir tahun kabisat</br>";
    }

    if(($tahun - $eko) % 4 == 0){
        echo "$eko Eko lahir tahun kabisat"; 
    }else{
        echo "$eko Eko tidak lahir tahun kabisat";
    }