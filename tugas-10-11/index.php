<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Calon Siswa - VSGA 2024</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <header class="my-5">
    <h3 class="text-dark text-center">Calon Siswa VSGA 2024</h3>
  </header>
  <main class="container">
    <div class="card border-0 shadow rounded-3">
      <div class="card-header border-light bg-white  d-flex justify-content-between align-items-center">
        <h6 class="m-0">Daftar Calon Siswa</h6>
        <a href="form-daftar.php" class="btn btn-primary btn-sm">Tambah Calon Siswa</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Asal Sekolah</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('koneksi.php');

              $sql = "SELECT * FROM calon_siswa";
              $stmt = $pdo->query($sql);

              $no = 1;
              while ($row = $stmt->fetch()) {
              ?>
                <tr>
                  <th scope="row"><?= $no++ ?></th>
                  <td class="text-capitalize"><?= htmlspecialchars($row['nama']) ?></td>
                  <td><?= htmlspecialchars($row['alamat']) ?></td>
                  <td class="text-capitalize"><?= htmlspecialchars($row['jenis_kelamin']) ?></td>
                  <td class="text-capitalize"><?= htmlspecialchars($row['agama']) ?></td>
                  <td class="text-capitalize"><?= htmlspecialchars($row['sekolah_asal']) ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</body>

</html>