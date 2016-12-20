  <?php
    include "config/config.php"
?>
                <!-- Main content -->
                  
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                  <h3 class="box-title">Bobot Atribut</h3>
                                </div><!-- /.box-header -->
                                                   
                <table id="dtb_manual" class="table table-bordered table-striped">
            <tbody>
                <?php 
                    $dtb=$db->fetch_custom("SELECT b_id, b_jenis_kelamin, b_gaji, b_umur, b_keahlian from bobot");
                    $i=1;
                    foreach ($dtb as $isi) {
                ?><tr id="line_<?=$isi->b_id;?>">
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td><?=$isi->b_jenis_kelamin;?></td>
                        </tr>
                        <tr>
                            <td><b>Umur</b></td>
                            <td><?=$isi->b_gaji;?></td>
                        </tr>
                        <tr>
                            <td><b>Jabatan</b></td>
                            <td><?=$isi->b_umur;?></td>
                        </tr>
                        <tr>
                            <td><b>Keahlian</b></td>
                            <td><?=$isi->b_keahlian;?></td>
                        </tr>
                <?php
                    $i++;
                    }
                ?>
            </tbody>
        </table>
					<div class="col-sm-6">
                <a href="index.php?page=update_bobot&b_id=<?=$isi->b_id;?>" class="btn btn-primary">TAMBAH</a>
            </div>
            </div>

            </div>
            </div>