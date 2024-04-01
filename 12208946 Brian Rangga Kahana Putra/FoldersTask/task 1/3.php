<?php 

    $panjang = 13;
    $lebar = 9;
     
    $type = $panjang * $lebar;
    if ($type <= 90){
        echo "Rumah Andi Tipe 36 dengan ukuran $type m2";
    }elseif($type<=90 && $type<=96){
        echo "Rumah Andi Tipe 45 dengan ukuran $type m2";
    }elseif($type>=96 && $type<=120){
        echo "Rumah Andi Tipe 54 dengan ukuran $type m2";
    }elseif($type<=120 && $type<=150){
        echo "Rumah Andi Tipe 60 dengan ukuran $type m2";
    }elseif($type>=150){
        echo "Rumah Andi Tipe 70 dengan ukuran $type m2";
    }