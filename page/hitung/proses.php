<?php
    include "/../../config/config.php"
?>

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
                    <h3 class="box-title"><b>Uji Data &raquo; Hasil Uji</b></h3>
                     
                </div>


            <?php

            if(isset($_POST['add'])){
                $id             = $_POST['id']; 
                $nama           = $_POST['nama'];
                $jenis_kelamin  = $_POST['jenis_kelamin'];
                $gaji           = $_POST['gaji'];
                $umur           = $_POST['umur'];
                $keahlian       = $_POST['keahlian'];

                        $insert = mysqli_query($con, "INSERT INTO uji(id, nama, jenis_kelamin, gaji, umur, keahlian) VALUES('$id','$nama', '$jenis_kelamin', '$gaji', '$umur', '$keahlian')") or die(mysqli_error());
                        
                        if($insert) {
                            echo '<div class="alert alert-success">Uji Data berhasil dilakukan.</div>';
                        }

                        else {
                            echo '<div class="alert alert-danger">Uji Data gagal dilakukan, silahkan coba lagi.</div>';
                        }
                        
            }
			
                function Getfloat($str) { 
                    if(strstr($str, ",")) { 
                        $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs 
                        $str = str_replace(",", ".", $str); // replace ',' with '.' 
                    } 
              
                    if(preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.' 
                        return floatval($match[0]); 
                    } 

                    else { 
                        return floatval($str); // take some last chances with Getfloat 
                    } 
                }

                
                $dtb=$db->fetch_custom("SELECT bobot.b_jenis_kelamin, bobot.b_gaji, bobot.b_umur, bobot.b_keahlian FROM bobot");
                    foreach ($dtb as $bobot) {
                        $bobot_jenis_kelamin    = $bobot->b_jenis_kelamin;
                        $bobot_gaji             = $bobot->b_gaji;
                        $bobot_umur             = $bobot->b_umur;
                        $bobot_keahlian         = $bobot->b_keahlian;
                }

                //jumlah data sample atau data pembanding
                    $sql = $db->fetch_all('sample');
                    $jumlah_data = $sql->rowCount();
                //echo $jumlah_data;   


			?>
<section class="content">
    <div class="container">
            <p><b>Data yang akan dibandingkan dengan kasus lama sebagai berikut:</b></p>            
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>Nama</b></td>
                            <td><?=$nama;?></td> 
                        </tr>
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td><?=$jenis_kelamin;?></td> 
                        </tr>
                        <tr>
                            <td><b>Gaji</b></td>
                            <td><?=$gaji;?></td> 
                        </tr>
                        <tr>
                            <td><b>Umur</b></td>
                            <td><?=$umur;?></td> 
                        </tr>
                        <tr>
                            <td><b>Keahlian</b></td>
                            <td><?=$keahlian;?></td> 
                        </tr>
                    </tbody>
                </table>
    </div>
    <br>
    <br>
        <div class="container">
            <p><b>Data Kasus Lama</b></p>            
                <table id="dtb_manual" class="table table-bordered table-striped">
                    <thead>
                        <tr>   
                            <th>ID</th> 
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Gaji</th>
                            <th>Umur</th>
                            <th>Keahlian</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            //inisialisasi semua nilai kedekatan dari tabel sample
                            $sqlKedekatan = $db->fetch_custom("SELECT id, nama, jenis_kelamin, gaji, umur, keahlian, kelas FROM sample");
                            $i=1;
                            foreach ($sqlKedekatan as $nilaiKedekatan) {
                        ?>
                    <tr>
                        <td><?=$nilaiKedekatan->id;?></td>
                        <td><?=$nilaiKedekatan->nama;?></td>
                        <td><?=$nilaiKedekatan->jenis_kelamin;?></td>
                        <td><?=$nilaiKedekatan->gaji;?></td> 
                        <td><?=$nilaiKedekatan->umur;?></td>
                        <td><?=$nilaiKedekatan->keahlian;?></td> 
                        <td><?=$nilaiKedekatan->kelas;?></td> 
                    </tr>
                        <?php
                            $i++;
                            }
                        ?>
              
                    </tbody>
            </table>
            </div>

     <br>
        <br>
        <br>
        <br>
        
    <div class="container">
    <p><b>Bobot Atribut</b></p>  
        <table id="dtb_manual" class="table table-bordered table-striped">
            <tbody>
                <?php 
                    $dtb=$db->fetch_custom("SELECT b_jenis_kelamin, b_gaji, b_umur, b_keahlian from bobot");
                    $i=1;
                    foreach ($dtb as $isi) {
                ?>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?=$isi->b_jenis_kelamin;?></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td><?=$isi->b_gaji;?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><?=$isi->b_umur;?></td>
                        </tr>
                        <tr>
                            <td>Keahlian</td>
                            <td><?=$isi->b_keahlian;?></td>
                        </tr>
                <?php
                    $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
    <p><b>Jarak Kasus Baru Dengan Semua Kasus (K)</b></p>  
        <table id="dtb_manual1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>   
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Gaji</th>
                    <th>Umur</th>
                    <th>Keahlian</th>
                    <th>Jarak</th>
                    <th>Kelas</th>
                </tr>
            </thead>
        <tbody>

        <?php 
            //inisialisasi semua nilai kedekatan dari tabel sample
            $sqlKedekatan = $db->fetch_custom("select id, nama, jenis_kelamin, gaji, umur, keahlian, kelas from sample");
            $i=1;
            foreach ($sqlKedekatan as $nilaiKedekatan) {
                if ($nilaiKedekatan->nama) {
                    $kedekatanNama[$i]=$nilaiKedekatan->nama;
                }

                if ($nilaiKedekatan->jenis_kelamin==$jenis_kelamin){
                        $kedekatanJK[$i] = 1;
                }
                else{
                    $kedekatanJK[$i] = $isi->b_jenis_kelamin;
                }                

               if ($nilaiKedekatan->gaji==$gaji){
                        $kedekatanGaji[$i] = 1;
                }
                else{
                    $kedekatanGaji[$i] = $isi->b_gaji;
                }

                if ($nilaiKedekatan->umur==$umur){
                        $kedekatanUmur[$i] = 1;
                }
                else{
                    $kedekatanUmur[$i] = $isi->b_umur;
                }

                if ($nilaiKedekatan->keahlian==$keahlian){
                        $kedekatanKeahlian[$i] = 1;
                }
                else{
                    $kedekatanKeahlian[$i] = $isi->b_keahlian;
                }

                 $jarak[$i] = ((Getfloat($kedekatanJK[$i])*Getfloat($isi->b_jenis_kelamin))+(Getfloat($kedekatanGaji[$i])*Getfloat($isi->b_gaji))+(Getfloat($kedekatanUmur[$i])*Getfloat($isi->b_umur))+(Getfloat($kedekatanKeahlian[$i])*Getfloat($isi->b_keahlian)))/(Getfloat($isi->b_jenis_kelamin)+Getfloat($isi->b_gaji)+Getfloat($isi->b_umur)+Getfloat($isi->b_keahlian));
        
                 if ($nilaiKedekatan->kelas) {
                    $kedekatanKelas[$i]=$nilaiKedekatan->kelas;
                }

                if ($nilaiKedekatan->id) {
                    $kedekatanId[$i]=$nilaiKedekatan->id;
                }

                $cek = mysqli_query($con, "SELECT * FROM hasil");
                if(mysqli_fetch_row($cek) == 0) {
                    mysqli_query($con, "INSERT INTO hasil(nama, jenis_kelamin, gaji, umur, keahlian, jarak, kelas) VALUES('$kedekatanNama[$i]','$kedekatanJK[$i]','$kedekatanGaji[$i]','$kedekatanUmur[$i]','$kedekatanKeahlian[$i]','$jarak[$i]','$kedekatanKelas[$i]')") or die(mysqli_error());
                }

                else {
                    mysqli_query($con, "UPDATE hasil SET jenis_kelamin='$kedekatanJK[$i]', gaji='$kedekatanGaji[$i]', umur='$kedekatanUmur[$i]', keahlian='$kedekatanKeahlian[$i]', jarak='$jarak[$i]', kelas='$kedekatanKelas[$i]' WHERE nama='$kedekatanNama[$i]'") or die(mysqli_error());
                }


        ?>

                <tr>
                    <td><?=$kedekatanId[$i];?></td>
                    <td><?=$kedekatanNama[$i];?></td>
                    <td><?=$kedekatanJK[$i];?></td>
                    <td><?=$kedekatanGaji[$i];?></td>
                    <td><?=$kedekatanUmur[$i];?></td>
                    <td><?=$kedekatanKeahlian[$i];?></td>
                    <td><?=$jarak[$i];?></td>
                    <td><?=$kedekatanKelas[$i];?></td>
                </tr>
           
            <?php

                $i++;

            
              }
              ?>
              
            </tbody>
        </table>

        <br>
        <br>
        <br>
        <br>

<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Hasil &raquo; Penentuan Kelas</b></h3>    
                </div>
                <p><b>Kedekatan dari hasil uji setelah diurutkan dari yang jarak paling dekat:</b></p>  
                <table id="dtb_manual" class="table table-bordered table-striped">
                    <thead>
                        <tr>   
                            <th>No</th> 
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Gaji</th>
                            <th>Umur</th>
                            <th>Keahlian</th>
                            <th>Jarak</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
            <?php

                
                $hasiluji=$db->fetch_custom("SELECT nama, jenis_kelamin, gaji, umur, keahlian, jarak, kelas FROM hasil ORDER BY jarak ASC");
                    $i=1;
                    foreach ($hasiluji as $hasil) {

            ?>
                    <tr>
                        <td><?=$i;?></td>
                        <td><?=$hasil->nama;?></td>
                        <td><?=$hasil->jenis_kelamin;?></td>
                        <td><?=$hasil->gaji;?></td> 
                        <td><?=$hasil->umur;?></td>
                        <td><?=$hasil->keahlian;?></td>
                        <td><?=$hasil->jarak;?></td> 
                        <td><?=$hasil->kelas;?></td> 
                    </tr>
                        <?php
                            $i++;
                            }
                        ?>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <br>
                <div class="container">
            
            <p><b>Hasil Pengujian dari data dibawah ini, maka ditentukan kelasnya adalah:</b></p> 
            <?php 
                $hasiluji=$db->fetch_custom("SELECT min(jarak) as maksimal FROM hasil GROUP BY id");
                    
                if ($hasil->kelas) {
                    $kelas['maksimal']=$hasil->kelas;
                }
            ?>         
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>Nama</b></td>
                            <td><?=$nama;?></td> 
                        </tr>
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td><?=$jenis_kelamin;?></td> 
                        </tr>
                        <tr>
                            <td><b>Gaji</b></td>
                            <td><?=$gaji;?></td> 
                        </tr>
                        <tr>
                            <td><b>Umur</b></td>
                            <td><?=$umur;?></td> 
                        </tr>
                        <tr>
                            <td><b>Keahlian</b></td>
                            <td><?=$keahlian;?></td> 
                        </tr>
                        <tr>
                            <td><b>Kelas</b></td>
                            <td><b><?=$kelas['maksimal'];?></b></td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>
    </div>


	   </div>
	</div>
			
	
        </div>
    </div>
</div>