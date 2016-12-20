<style>
        #image-holder {
            margin-top: 8px;
        }
        
        #image-holder img {
            border: 8px solid #DDD;
            max-width:100%;
        }
</style>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Uji Data Baru</h3>
                </div>

                
            <form class="form-horizontal" action="index.php?page=proses" method="post">


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
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="SUBMIT">
						<a href="index.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>