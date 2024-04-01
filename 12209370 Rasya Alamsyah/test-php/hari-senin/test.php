<?php
 
$nilai = 85;

if ($nilai > 90) {
    $grade = "lulusan terbaik";
}elseif ($nilai  > 60 && 90  ) {
    $grade = "lulus";
}elseif ($nilai  < 60 ) {
    $grade = "tidak lulus";
} else {
    $grade = "tidak lulus";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";

?>