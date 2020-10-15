<?php include 'assets/header.php'; ?>
<?php 

$getnim     = "SELECT nim FROM mahasiswa";

$gonim      = $conn->query($getnim);

?>
<div class="wrapper"><br>
    <div class="container">
      <h3>Tambah Data Nilai</h3>
    </div>
    <br>
  <div class="container">
    <form action="" method="POST">

      <div class="form-group">
        <label for="nim">NIM</label>
        <select class="form-control" name="nim" required>
        <?php while ($tampil = $gonim->fetch_assoc()) { ?>
            <option value="<?= $tampil['nim']; ?>"><?= $tampil['nim']; ?></option>
            
        <?php } ?>
        </select>
      </div>
      <div class="form-group">
      
      
          <label for="matkul">Nama Matakuliah</label>
          <select class="form-control" name="matkul" required>
            <option value="Logika &amp; Algoritma">Logika &amp; Algoritma</option>
            <option value="Pemrograman">Pemrograman</option>
            <option value="Statiska">Statiska</option>
            <option value="Web Programming">Web Programming</option>
          </select>
      
      </div>
      <div class="form-group">
        
          <label for="sks">SKS</label>
          <select class="form-control" name="sks" required>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
      
      </div>

      <div class="form-group">
        <label for="angka">Nilai Angka</label>
        <input class="form-control" type="text" placeholder="Nilai Angka" name="angka" required>
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
  $matkul		= $_POST['matkul'];
  $sks			= $_POST['sks'];
  $angka        = $_POST['angka'];

  $query        = "INSERT INTO nilai VALUES ('$nim','','$matkul', '$sks', '$angka')";

  $pushdata     = $conn->query($query);

  if ($pushdata == TRUE) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='nilai.php';</script>";
  } else {
    header('Location: tambah_nilai.php');
  }
}
?>

<?php include 'assets/footer.php'; ?>