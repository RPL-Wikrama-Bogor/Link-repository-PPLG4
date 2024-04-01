<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LITTLE</title>
    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        form{
            display: flex;
            flex-direction: column;
            width: 500px;
        }

        label{
            font-size: 20px;
        }


        input{
            margin: 20px 0;
            height: 25px;
            border-radius: 10px;
            padding: 10px;
            font-size:medium;
        }

        button{
            background-color: blue;
            color: white;
            border-radius:10px ;
            height: 40px;
        }

        p{
            font-size: 13px;
            color: gray;
        }

        button:hover{
            background-color:green;

        }
    </style>
</head>
<body>
    <form action="" method="post">
        <p>*Pastikan Input wajib 2 Digit sesuai jam yang berlaku!!</p>
        <h1>Form Jam Menit</h1>
        <label for="jam">Input Jam Donggss: </label>
        <input type="number" name="jam" id="jam">

        <label for="menit">Input Menit Donggss: </label>
        <input type="number" name="menit" id="menit">

        <button type="submit" name="submit">Kirim Yahh</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$jam = $_POST['jam'];
$menit = $_POST['menit'];

if ($jam <= 23 && $menit <= 59) {
    if ($jam == 11 || $jam == 12 ) {
        if ($jam == 11 && $menit < 30) {
            echo "<script>alert('Waktu Kerja Sesi 1');</script>";
            exit;
        } 
        elseif ($jam == 11 && $menit >= 30) {
            echo "<script>alert('Waktu Istirahat');</script>";
            exit;
        } elseif ($jam == 12 && $menit <= 15) {
            echo "<script>alert('Waktu Istirahat');</script>";
        } elseif ($jam == 12 && $menit > 15) {
            echo "<script>alert('Waktu Kerja Sesi 2');</script>";
        } else{
            echo "ERRORRRRRR :))))))))))))))))))";
        }
    } 
  elseif ($jam > 12 && $jam < 16 ) {
        if ($jam == 12 && $menit >= 15 ) {
            echo "<script>alert('Waktu Kerja Sesi 2');</script>";
            exit;
        }
        echo "<script>alert('Waktu Kerja Sesi 2');</script>";
    }
    elseif ($jam >= 7 && $jam < 13) {
        echo "<script>alert('Waktu Kerja Sesi 1');</script>";
    } else {
        echo "<script>alert('Bukan Waktu Kerjaaaaa');</script>";
    }
} else {
    echo "<script>alert('ERRRORRRRR :))))))))');</script>";
}
}

