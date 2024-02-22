<?php
$time1 = "19:00";
$time2 = "23:45";
$time3 = "08:55";

function ubahFormatWaktu($time){
    $jam = (int)substr($time,0,2);
    $menit = substr($time,3,2);
    $meridian = $jam >= 12? "pm": "am";
    $jam = $jam % 12;
    if ($jam === 0){
    $jam = 12;
}
return "$jam:$menit $meridian";
}
echo "19:00 = " . ubahFormatWaktu($time1) . " <br>";
echo "23:45 = " . ubahFormatWaktu($time2) . " <br>";
echo "08:55 = " . ubahFormatWaktu($time3) . " <br>";
?>