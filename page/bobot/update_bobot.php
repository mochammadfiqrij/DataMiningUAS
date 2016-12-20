<?php
    include "/../../config/config.php"
?>
<div class="container">
		<div class="content">
			<h3>Edit Data Sample</h3>
			
			<?php
			$b_id = $_GET['b_id'];
			if(isset($_POST['update'])){
				
			$data = array("b_jenis_kelamin"=>$_POST["b_jenis_kelamin"],"b_gaji"=>$_POST["b_gaji"],"b_umur"=>$_POST["b_umur"],"b_keahlian"=>$_POST["b_keahlian"]);
   

    		$update = $db->update("bobot",$data,"b_id",$_GET["b_id"]);
    			if ($up=true) {
      				echo '<div class="alert alert-success">Update Bobot berhasil dilakukan.</div>';
    			} 
    			else {
      				return false; 
    			}
    		}
			?>

			<form class="form-horizontal" action="" method="post">


				<input type="hidden" name="b_id" class="form-control" placeholder="ID" required>

				<div class="form-group">
					<label class="col-sm-3 control-label">BOBOT JENIS KELAMIN</label>
					<div class="col-sm-2">
						<input type="text" name="b_jenis_kelamin" class="form-control"  placeholder="BOBOT JENIS KELAMIN" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">BOBOT GAJI</label>
					<div class="col-sm-2">
						<input type="text" name="b_gaji" class="form-control"  placeholder="BOBOT GAJI" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">BOBOT UMUR</label>
					<div class="col-sm-2">
						<input type="text" name="b_umur" class="form-control"  placeholder="BOBOT UMUR" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">BOBOT KEAHLIAN</label>
					<div class="col-sm-2">
						<input type="text" name="b_keahlian" class="form-control"  placeholder="BOBOT KEAHLIAN" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="update" class="btn btn-primary" value="EDIT BOBOT">
						<a href="index.php?page=data_bobot" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
	</div>