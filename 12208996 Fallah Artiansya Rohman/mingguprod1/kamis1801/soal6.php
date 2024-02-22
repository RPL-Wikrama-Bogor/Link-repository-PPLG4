<?php
$students = [
    [
        'nama' => 'Arifin',
        'nilai' => [80,78,82,78,88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86,70,80,85,81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83,91,70,73,81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89,85,84,86,88],
    ],
];

foreach($students as $student){
    $total_nilai = 0;

    foreach($student['nilai'] as $nilai) {
        $total_nilai += $nilai;
    }
    echo $student['nama'] . ':' . $total_nilai . PHP_EOL;
}
?>