<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
// perintah hapus data berdasarkan id yang dikirimkan
  $q = $conn->query("DELETE FROM data_karyawan WHERE nip_karyawan = '$id'");
// cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data karyawan berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data karyawan gagal dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}