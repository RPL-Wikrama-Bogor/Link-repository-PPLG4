<!DOCTYPE html>
<html>
<body>

<h2>Minibus Counter</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Jumlah Pesertanya: <input type="number" name="jumlah_pesertanya" required>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $jumlah_pesertanya = intval($_POST["jumlah_pesertanya"]);
  $kapasitas_minibus = 7;
  $jumlah_minibus = ceil($jumlah_pesertanya / $kapasitas_minibus);
  echo "Jumlah minibus yang diperlukan: " . $jumlah_minibus;
}
?>

</body>
</html>