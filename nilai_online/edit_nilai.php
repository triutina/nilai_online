<?php include 'assets/header.php'; ?>
<?php 

$get_id     = $_GET['id_matkul'];

$getdb       = "SELECT * FROM nilai WHERE id_matkul='$get_id'";

$tampung     = $conn->query($getdb);

$tampil      = $tampung->fetch_assoc();

?>
<div class="wrapper"><br>
    <div class="container">
      <h3>Edit Data Nilai</h3>
    </div>
    <br>
  <div class="container">
    <form action="" method="POST">

      <div class="form-group">
        <label for="id_matkul">ID Nilai</label>
        <input type="text" class="form-control" name="id_matkul" value="<?= $get_id; ?>" required readonly>
      </div>

      <div class="form-group">
        <label for="nim">NIM</label>
        <input class="form-control" type="text" name="nim" value="<?= $tampil['nim']; ?>" required readonly>
      </div>

      <div class="form-group">
        <label for="nama_matkul">Nama Matakuliah</label>
          <select class="form-control" name="nama_matkul" required readonly>
            <option value="Logika &amp; Algoritma">Logika &amp; Algoritma</option>
            <option value="Pemrograman">Pemrograman</option>
            <option value="Statiska">Statiska</option>
            <option value="Web Programming">Web Programming</option>
          </select>
      </div>

      <div class="form-group">
        <label for="angka">Nilai Angka</label>
        <input class="form-control" type="text" name="nilai" value="<?= $tampil['nilai']; ?>" required>
      </div>

      <div class="form-group float-right">
        <a href="index.php" class="btn btn-danger">Halaman Utama</a>
        <input class="btn btn-primary" type="submit" name="ubah" value="Ubah">
      </div>

    </form>
  </div>
</div>

<?php

if (isset($_POST['ubah'])) {
  $id_matkul     = $_POST['id_matkul'];
  $nim          = $_POST['nim'];
  $nama_matkul  = $_POST['nama_matkul'];
  $nilai      = $_POST['nilai'];

  $query        = "UPDATE nilai SET nim='$nim', id_matkul='$id_matkul', matkul='$nama_matkul', nilai='$nilai' WHERE id_matkul='$id_matkul'";

  $pushdata     = $conn->query($query);

  if ($pushdata == TRUE) {
    echo "<script>alert('Data berhasil diubah'); window.location.href='nilai.php';</script>";
  } else {
    header('Location: edit_nilai.php?id_matkul='.$id_matkul);
  }
}
?>

<?php include 'assets/footer.php'; ?>