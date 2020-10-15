<?php include 'assets/header.php'; ?>

<div class="wrapper"><br>
    <div class="container">
      <h3>Tambah Data Mahasiswa</h3>
    </div>
    <br>
  <div class="container">
    <form action="" method="POST">

      <div class="form-group">
        <label for="nim">NIM</label>
        <input class="form-control" type="text" placeholder="NIM" name="nim" required>
      </div>

      <div class="form-group">
        <label for="nama_mhs">Nama Mahasiswa</label>
        <input class="form-control" type="text" placeholder="Nama Mahasiswa" name="nama_mhs" required>
      </div>

      <div class="form-group">
        <label for="prodi">Program Studi</label>
          <select class="form-control" name="prodi" required>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
          </select>
      </div>

      <div class="form-group">
          <label for="jenisk">Jenis Kelamin</label>
          <select class="form-control" name="jenisk" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
      </div>

      <div class="form-group">
        <label for="nohp">Nomor Password</label>
        <input class="form-control" type="text" placeholder="Nomor Handphone" name="nohp" maxlength="12" required>
      </div>

      <div class="form-group float-right">
        <a href="index.php" class="btn btn-danger">Halaman Utama</a>
        <input class="btn btn-primary" type="submit" name="tambah" value="Tambah">
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
  $nohp          = $_POST['nohp'];

  $query        = "INSERT INTO mahasiswa SET nim='$nim', nama_mhs='$nama_mhs', prodi='$prodi', jenisk='$jenisk', nohp='$nohp'";

  $pushdata     = $conn->query($query);

  if ($pushdata == TRUE) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='mahasiswa.php';</script>";
  } else {
    header('Location: tambah.php');
  }
}
?>

<?php include 'assets/footer.php'; ?>