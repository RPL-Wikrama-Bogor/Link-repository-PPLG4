<?php
    $jam =  24;
    $menit = '00';
    
    $result = getTime($jam, $menit);
    
    function getTime($jam, $menit){
    
        if ($jam >= 13 && $jam <= 23) {
        $myArray = array();
        $myArray2 = array();
    
        for ($i=1; $i <=     11; $i++) { 
            $myArray2[] = $i;
        }
    
        for ($i=13; $i <= 23; $i++) { 
            $myArray[] = $i;
        }
    
    
        $foundKeys = array_keys($myArray, $jam);
    
        foreach ($foundKeys as $key ) {
    
                echo 'Jadi jika dikonversikan kedalam am dan pm pukul: ' . $jam .'.'. $menit .' menjadi pukul: '. $myArray2[$key] . '.' . $menit . ' pm';
            
    
        }
    
    } else {
        if ($jam == 24 || $jam <= 24) {
            echo 'Waktu menunjukan pukul: 00.'. $menit . " am";
            exit;
        } else {
            echo "Waktu ERR";
            exit;
        }
        echo 'Waktu menunjukan pukul: 0' . $jam .'.'. $menit . " am";
    }
    
    }
