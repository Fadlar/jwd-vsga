<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran Siswa Baru | VSGA 2024</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .w-full {
      width: 100%;
    }

    @media (min-width: 768px) {
      .w-md-50 {
        width: 50%;
      }
    }
  </style>
</head>

<body class="min-vh-100 bg-light container">
  <div class="d-flex justify-content-center">
    <div class="card w-full w-md-50 border-0 shadow rounded-3 mt-3">
      <div class="card-header border-light bg-white  d-flex justify-content-between align-items-center">
        <h6 class="m-0">Formulir Pendaftaran</h6>
        <a href="../index.php" class="btn btn-light btn-sm">Kembali</a>
      </div>
      <div class="card-body">
        <form action="proses-pendaftaran-2.php" method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan nama lengkap..." required>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat lengkap..." required></textarea>
          </div>
          <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki">
              <label class="form-check-label" for="jenis_kelamin1">
                Laki-Laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan">
              <label class="form-check-label" for="jenis_kelamin2">
                Perempuan
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" id="agama" class="form-select" required>
              <option value="">Pilih Agama</option>
              <option value="islam">Islam</option>
              <option value="kristen">Kristen</option>
              <option value="hindu">Hindu</option>
              <option value="budha">Budha</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control" placeholder="Masukan nama sekolah asal...">
          </div>
          <div class="text-end mb-2">
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>