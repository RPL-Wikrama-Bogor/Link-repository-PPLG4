<?php  

    for($i = 1; $i <= 25; $i++){
        if(($i % 4) == 0 ){
            echo "$i</br>";
        }elseif(($i%5) == 0){
            echo "$i </br>";
        }
    }
    for($i = 1; $i <= 25; $i++){
        if(($i % 4) == 0 ){
            if(($i % 5) == 0 ){
                echo " Nomber : $i</br>";
            }
        }
    }