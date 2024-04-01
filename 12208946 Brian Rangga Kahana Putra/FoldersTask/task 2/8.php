<?php 


    $andi = 24;

    $mtk = 83;
    $ing = 86;
    $ind = 87;
    $ratas = 85;

    $rata = ($mtk + $ing + $ind) / 3 ;

    if ($andi >=16 && $andi<= 25){
        if($rata >= $ratas){
            if($mtk >= 87){
                if($ing >= 85){
                    if($ind >= 87){
                        echo "terpenuhi";
                    }else{
                        echo "tidak terpenuhi";
                    }
                }else{
                    echo "tidak terpenuhi";
                }
            }else{
                echo "tidak terpenuhi";
            }
        }else{
            echo "tidak terpenuhi";
        }
    }else {
        echo "tidak terpenuhi";
    }