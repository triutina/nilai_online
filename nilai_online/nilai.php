<?php include 'assets/header.php'; ?>
<?php 
$sum = 0;
$tsks = 0;
?>
    <div class="wrapper">
    <br>
      <div class="row">
        <div class="container">
          <h3>Daftar Nilai</h3>
        </div>
      </div>

      <br>

      <br>

      <div class="container">
        <table class="table table-bordered table-striped">
          <thead class="thead-dark">
            <tr>
              <th>NO</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Program Studi</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Nilai Angka</th>
              <th>Nilai Huruf</th>
              <th>Nilai Kumulatif</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>

          <?php 
          // var_dump($conn);

          $no = 1;

          $ambildb  = "SELECT * FROM mahasiswa INNER JOIN nilai ON mahasiswa.nim=nilai.nim";

          $tampungdb  = $conn->query($ambildb);

          while ($tampil = $tampungdb->fetch_assoc()) { ?>

          <?php 
           if ($tampil['nilai'] < 50) {
            $huruf = "E";
          } elseif ($tampil['nilai'] < 60) {
            $huruf = "D";
          } elseif ($tampil['nilai'] < 70) {
            $huruf = "C";
          } elseif ($tampil['nilai'] < 85) {
            $huruf = "B";
          } elseif ($tampil['nilai'] >= 85) {
            $huruf = "A";
          }
          ?>
           <?php
	
			if ($huruf == 'A'){
			$mutu = 4;
			}else if ($huruf == 'B'){
			$mutu = 3;
			} else if ($huruf == 'C'){
			$mutu = 2;
			} else if ($huruf == 'D'){
			$mutu = 1;
			} else if($huruf == 'E'){
			$mutu = 0;
			}
	?>
          
         
            <tr>
            <td style="text-align: center;"><?= $no++; ?></td>
              <td><?= $tampil['nim']; ?></td>
              <td><?= $tampil['nama_mhs']; ?></td>
              <td><?= $tampil['prodi']; ?></td>
              <td><?= $tampil['matkul']; ?></td>
              <td><?= $tampil['sks']; ?></td>
              <td><?= $tampil['nilai']; ?></td>
              <td><?= $huruf; ?></td>
              <td><?= $mutu; ?></td>
              <td style="text-align: center; width: 250px;">
                <a href="edit_nilai.php?id_matkul=<?= $tampil['id_matkul']; ?>" class="btn btn-warning">Ubah</a>
                <a href="hapus_nilai.php?id_matkul=<?= $tampil['id_matkul']; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus <?= $tampil['nama_mhs']; ?>');">Hapus</a>
              </td>
            </tr>
           
	</tr>
     <?php 
        //hitung nilai total
        $sum = $sum + ($tampil["sks"] * ($mutu));
        $tsks = $tsks + $tampil["sks"] ;
       ?>  
          <?php } ?>
          </body>
        </table>
       <div class="form-group float-right">
            <a href="mahasiswa.php" class="btn btn-primary">Kembali</a>
            <a href="tambah_nilai.php" class="btn btn-primary">Tambah</a>
    </div>
            <p>Jumlah :<?php echo $sum?></p>
      <p>IPK : <?php $ipk = $sum / $tsks; 
	  $ipk = round($ipk,2);
	  echo "$ipk"; ?></p>
        </div>
      </div>
    </div>
<?php include 'assets/footer.php'; ?>