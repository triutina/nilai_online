<?php

require 'assets/db_conn.php'; 

$get_id  = $_GET['id_matkul'];

$query    = "DELETE FROM nilai WHERE id_matkul='$get_id'";

$hapus    = $conn->query($query);

if ($hapus == TRUE) {
  echo "<script>alert('Data Berhasil Dihapus'); window.location.href='nilai.php'</script>";
} else {
  echo "<script>alert('Gagal!'); window.location.href='nilai.php'</script>";
}