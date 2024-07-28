<?php

// cek apakah tombol daftar sudah di klik atau belum
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // ambil data dari formulir
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolah_asal = $_POST['sekolah_asal'];

  // menyertakan file koneksi
  require_once 'koneksi.php';

  // buat query
  try {
    // apakah query simpan berhasil?
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE (:nama, :alamat, :jk, :agama, :sekolah_asal)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      'nama' => $nama,
      'alamat' => $alamat,
      'jk' => $jk,
      'agama' => $agama,
      'sekolah_asal' => $sekolah_asal,
    ]);

    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: index.php?status=sukses');
  } catch (PDOException $e) {
    // kalau gagal alihkan ke halaman index.php dengan status gagal
    header('Location: index.php?status=gagal');
  }
} else {
  die("Invalid request method.");
}
