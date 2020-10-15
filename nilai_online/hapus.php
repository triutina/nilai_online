<?php

require 'assets/db_conn.php'; 

$get_nim  = $_GET['nim'];

$query    = "DELETE FROM mahasiswa WHERE nim='$get_nim'";

$hapus    = $conn->query($query);

if ($hapus == TRUE) {
  echo "<script>alert('Data Berhasil Dihapus'); window.location.href='mahasiswa.php'</script>";
} else {
  echo "<script>alert('Gagal!'); window.location.href='index.php'</script>";
}