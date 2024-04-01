
<?php 

    $jumlahpeserta = 121;
    $lomba = "Web App";
    $pendidikan = "SMK";
    $thnpelaksanaan = date('y');
    
    if($pendidikan == "SMP"){
        echo "Tingkat pendidikan : SMP </br>";
        $kode = "P";

        }elseif($pendidikan == "SMA"||$pendidikan == "SMK"||$pendidikan =="MA" ){
            echo "Tingkat Pendidikan : SMA/SMK/MA </br>";
            $kode = "A";
        }

    if($lomba == "Web App"){
            echo "Lomba : Web App (01W)</br>";
            $jenis = "01W";

        }elseif($lomba == "Android"){
            echo "Lomba : Android (02A)</br>";
            $jenis = "02A";

        }elseif($lomba == "Game"){
            echo "Lomba : Game (03G)</br>";
            $jenis = "03G";

        }else{
            echo "Lomba : -</br>";
        }

    $nomerPeserta = ($jumlahpeserta + 1) . $jenis . $kode . $thnpelaksanaan;
    echo "Nomer Peserta Eko : $nomerPeserta ";