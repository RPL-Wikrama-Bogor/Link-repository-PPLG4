<?php

      
  $bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

  $dibawah = array();
  $diatas = array();
  
  foreach($bilangan as $angka){
      if($angka >= 75 ){
          $diatas[] = $angka;
      }else{
          $dibawah[] = $angka;
      }
  }
  echo "Bilangan Kompoten: </br>  ";
  echo implode("," , $diatas);
  echo "</br>";

  echo "Bilangan Tidak Kompoten: </br>";
  echo implode("," , $dibawah);
