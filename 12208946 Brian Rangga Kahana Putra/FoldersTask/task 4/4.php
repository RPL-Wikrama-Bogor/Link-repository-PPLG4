<?php  

    $a = ['1', '2', '3',];
    $b = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10',];

    foreach($a as $ang1){
        foreach($b as $ang2){
            $angka = $ang1 * $ang2;
            echo "$ang1 * $ang2 = $angka <hr>";
        }
    }


