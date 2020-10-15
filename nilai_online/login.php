<?php include 'assets/header.php'; ?>
			<div class="wrapper">
    			<br>
    		  <div class="row">
      		  <div class="container">
         	 <h3>Login Mahasiswa</h3>
        </div>
      </div>

      <br>
<table width="340" height="251" border="1" align="center">
  <tr>
    <td><p>Harap Login menggunkan NIM</p>
      <form method="post" action="login_proses.php" class="">
				<div class="form-group">
					<label for="nim" >NIM: </label>
					<input type="text" class="form-control" id="uname" placeholder="Nomor Induk Mahasiswa (NIM)" name="uname" required>
				</div>

				<div class="form-group">
					<label for="password">Password: </label>
					<input type="Password" class="form-control" id="password" placeholder="Password" name="password" required>
				</div>

				<div class="form-group">
					<input type="submit" name="submit" value="Login" class="btn btn-primary" >
				</div>
			</form>
			<br/>
		</table>
<?php include 'assets/footer.php'; ?>