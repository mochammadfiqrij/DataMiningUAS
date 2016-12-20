<?php
    include "/../../config/config.php"
?>
<div class="container">
		<div class="content">
			<h3>Tambah Data Sample</h3>
			<?php
			if(isset($_POST['add'])){

				$data = array("username"=>$_POST["username"],"password"=>md5($_POST["password"]),"nama"=>$_POST["nama"]);
  					$tambah = $db->insert("admin",$data);
  					if ($tambah=true) {
      					echo '<div class="alert alert-success">Tambah Data Admin berhasil dilakukan.</div>';
      				 	header("Location: index.php?page=data_admin");
    				} 
    				else {
      					return false;
   					}
   			}
		?>

			<form class="form-horizontal" action="" method="post">


				<input type="hidden" name="id" class="form-control" placeholder="ID" required>

				<div class="form-group">
					<label class="col-sm-3 control-label"><b>USERNAME</b></label>
					<div class="col-sm-3">
						<input type="text" name="username" class="form-control" placeholder="USERNAME" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><b>PASSWORD</b></label>
					<div class="col-sm-3">
						<input type="password" name="pass1" class="form-control" placeholder="PASSWORD" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><b>NAMA</b></label>
					<div class="col-sm-3">
						<input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="SUBMIT">
						<a href="index.php?page=data_admin" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>