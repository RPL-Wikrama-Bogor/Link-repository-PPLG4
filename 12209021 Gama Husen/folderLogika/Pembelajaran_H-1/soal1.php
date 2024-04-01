<?php 
    $umurAndi = 16;
    $umurDani = 16;
    $umurBeni = 19;
    $umurEko = 14; 

    for ($i = 24; $i > 0; $i--) { 

    switch ($i) {
        case '8':
            $kelahiranAndi = $i;
            $kelahiranDani = $i;
            break;
        case '5':
            $kelahiranBeni = $i;
            break;
        case '10':
            $kelahiranEko = $i;
            break;
        
        default:
            break;
    }


}


function data($kelahiran){

}
$tahun = [
    [
        "nama" => "Andi",
        "umur" => $umurAndi,
        "tahun" => '200' . $kelahiranAndi,
    ],
    [
        "nama" => "Beni",
        "umur" => $umurBeni,
        "tahun" => '200' . $kelahiranBeni,
    ],
    [
        "nama" => "Dani",
        "umur" => $umurDani,
        "tahun" => '200' . $kelahiranDani,
    ],
    [
        "nama" => "Eko",
        "umur" => $umurEko,
        "tahun" => '20' . $kelahiranEko,
    ],
];

foreach ($tahun as $key) {
    echo "Nama: " . $key['nama'];
    echo "<br>";
    echo "Umur: "  . $key['umur'];
    echo "<br>";
    echo "Tahun Kelahiran: " . $key['tahun'];
    echo "<br>";



    if ($key['tahun'] % 4 == 0) {
        echo $key['nama'] . " Lahir pada tahun kabisat";
    }

    echo "<br>";
    echo "<br>";
}





