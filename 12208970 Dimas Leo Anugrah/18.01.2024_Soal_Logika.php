Soal 1  |
<br>
<?php
function ubahFormatWaktu($waktu) {

    $jamMenit = explode(':', $waktu);
    $jam = (int)$jamMenit[0];
    $menit = $jamMenit[1];

    if ($jam >= 0 && $jam < 12) {
        $ampm = 'AM';
    } else {
        $ampm = 'PM';
        if ($jam > 12) {
            $jam = $jam - 12;
        }
    }

    $jam = str_pad($jam, 2, '0', STR_PAD_LEFT);

    $waktuBaru = $jam . '.' . $menit . ' ' . $ampm;
    
    return $waktuBaru;
}
$waktu1 = '19:00';
$waktu2 = '23:45';
$waktu3 = '08:55';

$waktuBaru1 = ubahFormatWaktu($waktu1);
$waktuBaru2 = ubahFormatWaktu($waktu2);
$waktuBaru3 = ubahFormatWaktu($waktu3);

echo "Waktu Yang Belum Di Ubah: $waktu1, Waktu Yang Telah Diubah: $waktuBaru1 <br>";
echo "Waktu Yang Belum Di Ubah: $waktu2, Waktu Yang Telah Diubah: $waktuBaru2 <br>";
echo "Waktu Yang Belum Di Ubah: $waktu3, Waktu Yang Telah Diubah: $waktuBaru3 <br>";
?>
<br>
==================================================
<br>
Soal 2 |
<br>
<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belumKompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Nilai Yang Kompeten: " . implode(', ', $kompeten) . "<br>";
echo "Nilai Yang Tidak Kompeten: " . implode(', ', $belumKompeten);
?>
<br>
==================================================
<br>
Soal 3 |
<br>
<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok1 = array_values(array_intersect($bil1, $bil2));
$kelompok2 = array_values(array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1)));

echo "Kelompok Pertama: " . implode(", ", $kelompok1) . "<br>";
echo "Kelompok Kedua: " . implode(", ", $kelompok2);
?>
<br>
==================================================
<br>
Soal 4 |
<br>
<?php
$barang = [
    ['nama' => 'Ban', 'diskon' => 10],
    ['nama' => 'Oli Mesin'],
    ['nama' => 'Kampas Rem'],
    ['nama' => 'Busi', 'diskon' => 9],
    ['nama' => 'Akumulator', 'diskon' => 7],
];

$barang_dengan_diskon = array_filter($barang, fn($item) => isset($item['diskon']));

foreach ($barang_dengan_diskon as $barang) {
    echo "Nama: " . $barang['nama'] . ", Diskon: " . $barang['diskon'] . "%<br>";
}
?>
<br>
==================================================
<br>
Soal 5 |
<br>
<?php
$n = 3; 
echo '<table border="1">';
for ($i = 1; $i <= $n; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td>';
        echo sprintf("%2d x %2d = %2d", $i, $j, ($i * $j));
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
<br>
==================================================
<br>
Soal 6 |
<br>
<?php
$students = [
    ['nama' => 'Andi', 'nilai' => [80, 78, 82, 78, 88]],
    ['nama' => 'Beni', 'nilai' => [86, 70, 80, 85, 81]],
    ['nama' => 'Dani', 'nilai' => [83, 91, 70, 73, 81]],
    ['nama' => 'Eko', 'nilai' => [89, 85, 84, 86, 88]],
];

foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];
    
    $jumlahNilai = array_sum($nilai);
    
    echo "Total nilai untuk $nama: $jumlahNilai <br>";
}
?>

