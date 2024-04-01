<?php  

    function angka($n){
        $a = 9;
        foreach($n as $angka){
            $total = $a * 4 + $angka * 3;
            echo $total. "<hr>" ;
        }
;    }
    $n = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
    angka($n);
