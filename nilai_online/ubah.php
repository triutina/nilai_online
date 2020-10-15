<?php 

include 'assets/header.php';

$get_nim    = $_GET['nim'];

$query      = "SELECT * FROM mahasiswa WHERE nim='$get_nim'";

$tampung    = $conn->query($query);

$tampil     = $tampung->fetch_assoc();

?>

<div class="wrapper"><br>
  <div class="container">
    <h3>Edit Data Mahasiswa</h3>
  </div>
  <br>
  <div class="container">
    <form action="" method="POST">

      <div class="form-group">
        <label for="nim">NIM</label>
        <input class="form-control" type="text" placeholder="NIM" name="nim" value="<?= $tampil['nim']; ?>" required readonly>
      </div>

      <div class="form-group">
        <label for="nama_mhs">Nama Mahasiswa</label>
        <input class="form-control" type="text" placeholder="Nama Mahasiswa" name="nama_mhs" value="<?= $tampil['nama_mhs']; ?>" required>
      </div>

      <div class="form-group">
        <<div class="form-group">
        <label for="prodi">Program Studi</label>
          <select class="form-control" name="prodi" required>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
          </select>
      </div>
      </div>

     <div class="form-group">
          <label for="jenisk">Jenis Kelamin</label>
          <select class="form-control" name="jenisk" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
      </div>

      <div class="form-group">
        <label for="password">Nomor Handphone</label>
        <input class="form-control" type="text" placeholder="Nomor Handphone" name="nohp" value="<?= $tampil['nohp']; ?>" required>
      </div>

      <div class="form-group float-right">
        <a href="index.php" class="btn btn-primary">Halaman Utama</a>
        <input class="btn btn-primary" type="submit" name="tambah" value="Ubah">
      </div>

    </form>
  </div>
</div>

<?php

if (isset($_POST['tambah'])) {
  $nim          = $_POST['nim'];
  $nama_mhs     = $_POST['nama_mhs'];
  $prodi        = $_POST['prodi'];
  $jenisk       = $_POST['jenisk'];
  $nohp         = $_POST['nohp'];

  $query        = "UPDATE mahasiswa SET nim='$nim', nama_mhs='$nama_mhs', prodi='$prodi', jenisk='$jenisk', nohp='$nohp' WHERE nim='$nim'";

  $pushdata     = $conn->query($query);

  if ($pushdata == TRUE) {
    echo "<script>alert('Data berhasil dirubah'); window.location.href='mahasiswa.php';</script>";
  } else {
    header('Location: tambah.php');
  }
}
?>

<?php include 'assets/footer.php'; ?>