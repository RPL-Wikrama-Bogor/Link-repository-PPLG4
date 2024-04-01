<?php

    $bb = 44;
    $tt = 148;
    $tts = $tt / 100;
    $bmi = $bb / $tts;

    if($bmi<= 18.5){
        echo " kurang </br>";
    }elseif($bmi>= 18.5 && $bmi<= 22.9){
        echo "sedang </br>";
    }elseif($bmi<= 22.9 && $bmi<= 24.9){
        echo "berat badab berlebih </br>";
    }else{
        echo "Obesitas </br>";
    }
    echo $bmi ;