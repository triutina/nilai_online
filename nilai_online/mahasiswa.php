<?php include 'assets/header.php'; ?>
    <div class="wrapper">
    <br>
      <div class="row">
        <div class="container">
          <h3>Daftar Mahasiswa | <a href="nilai.php">Daftar Nilai</a></h3>
        </div>
      </div>

      <br>

      <div class="container text-center col-md-4">
        <form action="" method="POST">
          <input class="form-control" type="text" name="keyword" placeholder="Cari Mahasiswa...">
          
          <br>

          <input class="btn btn-warning" type="submit" name="cari" value="Cari">
        </form>
      </div>

      <br>

      <div class="container">
        <table class="table table-bordered table-striped">
          <thead class="thead-dark">
            <tr>
              <th>NO</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Program Studi</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Handphone</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
          
          <?php
          if (isset($_POST['cari'])) {
            $keyword  = $_POST['keyword'];

            $no = 1;

            $cari  = "SELECT * FROM mahasiswa WHERE nama_mhs LIKE '%$keyword%' OR nim LIKE '%$keyword%'";

            $tampungdb  = $conn->query($cari);

            while ($tampil = $tampungdb->fetch_assoc()) { ?>
              <tr>
              <td style="text-align: center;"><?= $no++; ?></td>
                <td><?= $tampil['nim']; ?></td>
                <td><?= $tampil['nama_mhs']; ?></td>
                <td><?= $tampil['prodi']; ?></td>
                <td><?= $tampil['jenisk']; ?></td>
                <td><?= $tampil['nohp']; ?></td>
                <td style="text-align: center; width: 250px;">
                  <a href="ubah.php?nim=<?= $tampil['nim']; ?>" class="btn btn-warning">Ubah</a>
                  <a href="hapus.php?nim=<?= $tampil['nim']; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus <?= $tampil['nama_mhs']; ?>');">Hapus</a>
                </td>
              </tr>

          <?php } ?>
          <?php } else { ?>

          <?php 
          // var_dump($conn);

          $no = 1;

          $ambildb  = "SELECT * FROM mahasiswa";

          $tampungdb  = $conn->query($ambildb);

          while ($tampil = $tampungdb->fetch_assoc()) { ?>
            <tr>
            <td style="text-align: center;"><?= $no++; ?></td>
              <td><?= $tampil['nim']; ?></td>
              <td><?= $tampil['nama_mhs']; ?></td>
              <td><?= $tampil['prodi']; ?></td>
              <td><?= $tampil['jenisk']; ?></td>
              <td><?= $tampil['nohp']; ?></td>
              <td style="text-align: center; width: 250px;">
                <a href="ubah.php?nim=<?= $tampil['nim']; ?>" class="btn btn-warning">Ubah</a>
                <a href="hapus.php?nim=<?= $tampil['nim']; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus <?= $tampil['nama_mhs']; ?>');">Hapus</a>
              </td>
            </tr>
          <?php } ?>
          <?php } ?>
          </tbody>
        </table>
            <a href="tambah.php" class="btn btn-primary float-right">Tambah</a>
      </div>
    </div>
    <br><br><br><br>
    
<?php include 'assets/footer.php'; ?>