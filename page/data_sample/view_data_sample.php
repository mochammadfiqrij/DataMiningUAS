  <?php
    include "config/config.php"
?>
                <!-- Main content -->
                  
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">

                                <div class="box-header">

                                  <h3 class="box-title">List Data Pembanding</h3>
                                </div><!-- /.box-header -->

                                                   
                <table id="dtb_manual" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>   
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Gaji</th>
                            <th>Umur</th>
                            <th>Keahlian</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    

                    
                        <?php 
                            //inisialisasi semua nilai kedekatan dari tabel training

                            $dtb = $db->fetch_custom("SELECT id, nama, jenis_kelamin, gaji, umur, keahlian, kelas FROM sample");
                            $i=1;

                            foreach ($dtb as $isi) {
                        ?><tr id="line_<?=$isi->id;?>">
                    <tr>
                        <td><?=$i;?></td>
                        <td><?=$isi->id;?></td>
                        <td><?=$isi->nama;?></td>
                        <td><?=$isi->jenis_kelamin;?></td>
                        <td><?=$isi->gaji;?></td> 
                        <td><?=$isi->umur;?></td>
                        <td><?=$isi->keahlian;?></td> 
                        <td><?=$isi->kelas;?></td> 
                        <td>
                
    <a href="index.php?page=update_sample&id=<?=$isi->id;?>" title="Edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
    <a href="index.php?page=hapus_sample&id=<?=$isi->id;?>" title="Hapus" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>

            </tr>
            <?php
                $i++;
            }
              ?>
              
            </tbody>
                                            </table>
            <div class="col-sm-6">
                <a href="index.php?page=tambah_sample" class="btn btn-primary">TAMBAH</a>
            </div>
                                                      
            </div>
            </div>
            </div>