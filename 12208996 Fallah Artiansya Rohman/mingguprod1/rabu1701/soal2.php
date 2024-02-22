<?php
$jam = 16;
$menit = 0;

function tentukanWaktu($jam, $menit) {
    $waktuSekarang = $jam * 100 + $menit;

    if ($waktuSekarang >= 700 && $waktuSekarang < 1130) {
        return "waktu kerja";
    }elseif ($waktuSekarang >= 1130 && $waktuSekarang < 1215) {
        return "waktu istirahat";
    }elseif ($waktuSekarang >= 1215 && $waktuSekarang < 1601) {
        return "waktu kerja";
    }else{
        return "bukan jam kerja";
    }
}

$menitFormate = $menit < 10 ? "0" . $menit : $menit;
echo "Saat ini adalah pukul ". $jam .":" . $menitFormate . " maka sekarang merupakan " . tentukanWaktu($jam, $menit). ".";
?>







<!-- Definisi Variabel:

$jam dan $menit adalah variabel yang menyimpan nilai jam dan menit saat ini. Dalam contoh ini, $jam diatur ke 16 dan $menit ke 0.
Fungsi tentukanWaktu:

Fungsi ini menerima dua parameter, $jam dan $menit, dan menggunakannya untuk menentukan status waktu saat ini.
Pertama, fungsi menggabungkan jam dan menit menjadi satu nilai dengan mengalikan jam dengan 100 dan menambahkannya dengan menit. Ini menghasilkan format seperti 1600 untuk pukul 16:00.
Logika Penentuan Waktu:

Fungsi kemudian memeriksa nilai $waktuSekarang menggunakan pernyataan if dan elseif untuk menentukan apakah saat ini adalah “waktu kerja”, “waktu istirahat”, atau “bukan waktu kerja”.
Berdasarkan kondisi yang diberikan, waktu kerja adalah antara pukul 07:00 hingga 11:30 dan 12:15 hingga 16:00. Waktu istirahat adalah antara pukul 11:30 hingga 12:15. Sementara itu, waktu di luar rentang tersebut dianggap “bukan waktu kerja”.
Menampilkan Hasil:

Sebelum mencetak hasil, kode memformat menit agar selalu memiliki dua digit. Ini dilakukan dengan menggunakan operator ternary untuk mengecek apakah $menit kurang dari 10. Jika ya, maka menambahkan “0” di depan nilai menit.
Akhirnya, fungsi echo digunakan untuk mencetak pesan yang menyatakan waktu saat ini dan status waktu berdasarkan nilai jam dan menit.
Dengan kode ini, jika Anda mengubah nilai $jam dan $menit, fungsi tentukanWaktu akan menentukan dan mencetak status waktu yang sesuai. Misalnya, jika $jam adalah 15 dan $menit adalah 40, hasilnya akan mencetak “waktu kerja” karena masih dalam rentang waktu kerja siang hari.