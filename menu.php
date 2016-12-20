  <?php
  $host = "localhost"; // server
  $user = "root"; // username
  $pass = ""; // password
  $database = "knn_motor"; // nama database
 
  $con=mysqli_connect('localhost','root','','knnmotor'); // menggunakan mysqli_connect
 
if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
  echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
}
?>
<aside class="main-sidebar">
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">DATA MINING - KNN MOTOR</li>
              <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> <span>Home</span></a></li>
            <li class="header">Perhitungan KNN</li>
              <li><a href="index.php?page=uji_data"><i class="glyphicon glyphicon-pencil"></i> <span>Uji Data</span></a></li>
              <li><a href="index.php?page=data_sample"><i class="glyphicon glyphicon-book"></i> <span>Data Sample</span></a></li>
              <li><a href="index.php?page=bobot"><i class="glyphicon glyphicon-tasks"></i><span> Bobot Nilai</span></a>
            <li class="header">Akun</li>
              <li><a href="index.php?page=data_admin"><i class="glyphicon glyphicon-user"></i><span> Data Admin</span></a>
              <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
            </li>
			      
          </ul>
        </section>
</aside>