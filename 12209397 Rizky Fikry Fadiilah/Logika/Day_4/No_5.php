<<<<<<< HEAD
<?php
$student = [
  [
    'nama' => 'Andi',
    'nilai' => [80, 78, 82, 78, 88],
  ],
  [
    'nama' => 'Beni',
    'nilai' => [86, 70, 80, 85, 81],
  ],
  [
    'nama' => 'Dani',
    'nilai' => [83, 91, 70, 73, 81],
  ],
  [
    'nama' => 'Eko',
    'nilai' => [89, 85, 84, 86, 88],
  ],
];

foreach ($student as $nilai) {
    $students = $nilai['nama'];
    $jumlahNilai = array_sum($nilai['nilai']);
    echo "Jumlah nilai untuk $students: $jumlahNilai\n";
}
=======
<?php
$student = [
  [
    'nama' => 'Andi',
    'nilai' => [80, 78, 82, 78, 88],
  ],
  [
    'nama' => 'Beni',
    'nilai' => [86, 70, 80, 85, 81],
  ],
  [
    'nama' => 'Dani',
    'nilai' => [83, 91, 70, 73, 81],
  ],
  [
    'nama' => 'Eko',
    'nilai' => [89, 85, 84, 86, 88],
  ],
];

foreach ($student as $nilai) {
    $students = $nilai['nama'];
    $jumlahNilai = array_sum($nilai['nilai']);
    echo "Jumlah nilai untuk $students: $jumlahNilai\n";
}
>>>>>>> 3a0430d10cdd9ecf717f54019f844933a9783fe2
?>