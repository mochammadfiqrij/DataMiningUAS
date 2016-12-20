  <?php
    include "config/config.php"
?>
                <!-- Main content -->
                  
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">

                                <div class="box-header">

                                  <h3 class="box-title">Data Admin</h3>
                                </div><!-- /.box-header -->

                                                   
                <table id="dtb_manual" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>  
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    

                    
                        <?php 
                            //inisialisasi semua nilai kedekatan dari tabel training

                            $dtb = $db->fetch_custom("SELECT id, username, nama FROM admin");
                            $i=1;

                            foreach ($dtb as $isi) {
                        ?><tr id="line_<?=$isi->id;?>">
                    <tr>
                        <td><?=$isi->id;?></td>
                        <td><?=$isi->username;?></td>
                        <td>************</td>
                        <td><?=$isi->nama;?></td>
                        <td>
                
                    <a href="index.php?page=update_admin&id=<?=$isi->id;?>" title="Edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href="index.php?page=hapus_admin&id=<?=$isi->id;?>" title="Hapus" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>

            </tr>
            <?php
                $i++;
            }
              ?>
              
            </tbody>
                                            </table>
            <div class="col-sm-6">
                <a href="index.php?page=tambah_admin" class="btn btn-primary">TAMBAH</a>
            </div>
                                                      
            </div>
            </div>
            </div>