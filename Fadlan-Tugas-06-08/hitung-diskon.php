<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitung Diskon</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h2>Hitung Diskon</h2>
    <form action="" method="post">
      <label for="totalBelanja">Total Belanja: </label>
      <input type="number" id="totalBelanja" name="totalBelanja" placeholder="Masukan total belanja..." min="1" autofocus required>
      <button type=" submit">Hitung Diskon</button>
    </form>

    <div id="hasil">
      <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function hitungDiskon($totalBelanja) // function hitung belanja dengan parameter total belanja
        {
          $diskon = 0;
          if ($totalBelanja >= 100000) {
            $diskon = 0.1 * $totalBelanja; // Diskon 10% untuk total belanja di atas atau sama dengan Rp. 100.000
          } elseif ($totalBelanja >= 50000) {
            $diskon = 0.05 * $totalBelanja; // Diskon 5% untuk total belanja di atas atau sama dengan Rp. 50.000
          }
          return $diskon;
        }

        function formatRupiah($value)
        {
          return  'Rp ' . number_format($value, 0, '.', '.');
        }

        // panggil function hitung diskon
        $totalBelanja = $_POST['totalBelanja']; // parameter
        $diskon = hitungDiskon($totalBelanja); // hitung diskon
      }
      ?>
      <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
        <h3>Hasil: </h3>
        <p>Total belanja: <?= formatRupiah($totalBelanja) ?></p>
        <p>Diskon: <?= formatRupiah($diskon) ?></p>
        <p>Total yang harus dibayar: <?= formatRupiah($totalBelanja - $diskon) ?></p>
      <?php } ?>
    </div>
  </main>
</body>

</html>