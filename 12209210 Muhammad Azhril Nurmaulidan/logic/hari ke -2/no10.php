<?php
$angka = 90;

for ($i = 3; $i <= 30; $i += 3) {
    if ($angka % $i == 0) {
        echo "$angka dapat dibagi habis oleh $i <br>";
    } else {
        echo "$angka tidak dapat dibagi habis oleh $i <br>";
    }
}