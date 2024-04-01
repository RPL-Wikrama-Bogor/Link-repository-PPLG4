<?php

    $bil1 = array( 80, 77, 65, 89, 55, 12, 90, 86);
    $bil2 = array( 77, 99, 55, 81, 45, 90, 91, 58);

    $sama = array();
    $beda = array();

    foreach($bil1 as $bils ){
        $found = false;
        foreach($bil2 as $bilss){
            if($bils == $bilss){
                $sama[] = $bils;
                $found = true;
            }
        }
        if (!$found) {
            $beda[] = $bils;
        }
    }
    var_dump($beda);
    $beda = array_merge($beda, array_diff($bil2, $bil1));

    echo "Bilangan Yang Sama: </br>  ";
    echo implode("," , $sama);
    echo "</br>";
  
    echo "Bilangan Yang Beda: </br>";
    echo implode("," , $beda);
