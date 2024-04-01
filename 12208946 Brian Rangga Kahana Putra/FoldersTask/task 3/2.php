<?php 

    $jam = 16;
    $mnt = 00;

    $ttl = ($jam * 60) + $mnt;



    if($jam >= 07 && $jam <= 11){
        if($jam == 11 && $mnt >= 30){
            echo "waktu Istirahat";
        }else{
            echo "Waktu Kerja";
        }
    }elseif($jam >=11 && $jam <= 12){
        if($jam == 12 && $mnt >= 15){
            echo "waktu kerja Sementara";
        }else{
            echo "Waktu Istirahat";
        }
    }elseif($jam >=12 && $jam <= 15){
        if($jam == 16 && $mnt >= 30){
            echo "Waktu Bebas";
        }else{
            echo "Waktu Kerja Sementara";
        }
    }else{
        echo "waktu Bebas";
    }


    

