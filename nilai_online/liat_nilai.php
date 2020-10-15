<?php include 'assets/header.php'; ?>
<?php 
$sum = 0;
$nilaiKum=0;
$tsks = 0;
?>
<?php
$getnim     = "Tri";

$gonim      = "mhs01";

?>
    <div class="card-body col-sm-10" style="padding-left:100px">
<h4 class="text-center"><b>KARTU HASIL STUDI MAHASISWA</h4> 
<p class="text-center">------------------------------------</p></b> <br/>  <br/>
			
<b class="text-left">NIM &nbsp; &nbsp;: <?php echo $getnim; ?> </b> <br/>
<p class="text-left"><b>Nama :<?php echo $gonim;?></p> </b>

        <div class="table-responsive" style="font-size: 12pt; color: black">
	<table class="table table-stripped text-center" style="font-size: 10pt; color: black" cellspacing="0" cellpadding="0">
            <tr>
              <th>NO</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Nilai Angka</th>
              <th>Nilai Huruf</th>
              <th>Nilai Kumulatif</th>
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
              
              <td><?= $tampil['matkul']; ?></td>
              <td><?= $tampil['sks']; ?></td>
              <td><?= $tampil['nilai']; ?></td>
              <td><?= $huruf; ?></td>
              <td><?= $mutu; ?></td>
            </tr>
		</tr>
         <?php 
        //hitung nilai total
        $sum = $sum + ($tampil["sks"] * ($mutu));
        $tsks = $tsks + $tampil["sks"] ;
		$nilaiKum = $nilaiKum + $mutu;
       ?> 
          <?php } ?>
          </tbody>
        </table>
        <p class="text-center">-----------------------------------------------------------------------------------------------------------------------------------------------</p>
        <div class="float-right">
        <p>Jumlah :<?php echo $sum?></p>
        <p>Total Nilai Kumulatif <?php echo $nilaiKum ?>
      <p>IPK : <?php $ipk = $sum / $tsks; 
	  $ipk = round($ipk,2);
	  echo "$ipk"; ?></p>
      </div>
        </div>
      </div>
    </div>
<?php include 'assets/footer.php'; ?>