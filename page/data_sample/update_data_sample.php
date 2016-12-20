<?php
    include "/../../config/config.php"
?>
<div class="container">
		<div class="content">
			<h3>Edit Data Sample</h3>
			
			<?php
			$id = $_GET['id'];
			if(isset($_POST['update'])){
				
			$data = array("nama"=>$_POST["nama"],"jenis_kelamin"=>$_POST["jenis_kelamin"],"gaji"=>$_POST["gaji"],"umur"=>$_POST["umur"],"keahlian"=>$_POST["keahlian"],"kelas"=>$_POST["kelas"],);
   

    		$update = $db->update("sample",$data,"id",$_GET["id"]);
    			if ($up=true) {
      				echo '<div class="alert alert-success">Update Data Sample berhasil dilakukan.</div>';
    			} 
    			else {
      				return false; 
    			}
    		}
			?>

			<form class="form-horizontal" action="" method="post">


				<input type="hidden" name="id" class="form-control" placeholder="ID" required>

				<div class="form-group">
					<label class="col-sm-3 control-label"><b>NAMA</b></label>
					<div class="col-sm-2">
						<input type="text" name="nama" class="form-control" placeholder="NAMA" required>
					</div>	
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><b>JENIS KELAMIN</b></label>
					<div class="col-sm-4">
						<select name="jenis_kelamin">
							<option value="">--Silahkan Pilih--</option>
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>	
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><b>GAJI</b></label>
					<div class="col-sm-4">
						<select name="gaji">
							<option value="">--Silahkan Pilih--</option>
							<option value="Tinggi">Tinggi</option>
							<option value="Rendah">Rendah</option>	
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><b>UMUR</b></label>
					<div class="col-sm-4">
						<select name="umur">
							<option value="">--Silahkan Pilih--</option>
							<option value="Dewasa">Dewasa</option>
							<option value="Muda">Muda</option>	
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><b>KEAHLIAN</b></label>
					<div class="col-sm-4">
						<select name="keahlian">
							<option value="">--Silahkan Pilih--</option>
							<option value="Ya">Ya</option>
							<option value="Tidak">Tidak</option>	
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><b>KELAS</b></label>
					<div class="col-sm-4">
						<select name="kelas">
							<option value="">--Silahkan Pilih--</option>
							<option value="Sport">Sport</option>
							<option value="Matic">Matic</option>
							<option value="Bebek">Bebek</option>		
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="update" class="btn btn-primary" value="SUBMIT">
						<a href="index.php" class="btn btn-warning">TAMBAH DATA</a>
					</div>
				</div>
			</form>
	</div>