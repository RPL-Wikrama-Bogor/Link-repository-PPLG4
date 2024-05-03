<?php
$mata_lomba = "Web App";
$jumlah_peserta = 121;
$pendidikan = "SMK";

if ($mata_lomba == "Web App") 
{
    $kode_mata_lomba = "01W";
} 
elseif ($mata_lomba == "Android") 
{
    $kode_mata_lomba = "02A";
} 
elseif ($mata_lomba == "Game") 
{
    $kode_mata_lomba = "03G";
} 
else 
{
    die("Error: Mata lomba tidak valid");
}

if ($pendidikan == "SMP") 
{
    $kode_pendidikan = "P";
} 
elseif ($pendidikan == "SMA" || $pendidikan == "SMK" || $pendidikan == "MA") 
{
    $kode_pendidikan = "A";
} 
else 
{
    die("Error: Tingkat pendidikan tidak valid");
}

$nomor_peserta_eko = "Urutan Daftar ke - kategori mata lomba - tingkat pendidikan P untuk SMP,  A untuk SMA/SMK/MA - 2 digit terakhir tahun pelaksanaan";
echo "Nomor peserta Eko: ";
if ($jumlah_peserta < 10) {
    echo "0" . $jumlah_peserta;
} else {
    echo $jumlah_peserta;
}
echo $kode_mata_lomba . $kode_pendidikan . substr(date('Y'), 2);
?>
