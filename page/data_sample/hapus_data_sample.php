<?php  
	include "/../../config/config.php"                        
?>

<?php  
    if(isset($_POST['delete'])){
    $id = $_GET['id'];
	$dtb = $db->fetch_custom("SELECT * FROM sample WHERE id='$id'");
    
    $db->delete("sample","id",$_GET["id"]); 
    header("Location: index.php?page=data_sample");
   }
   ?>  
	<div class="container">
		<div class="content">
	<form class="form-horizontal" action="" method="post">
    <label>Apakah anda yakin akan menghapus Data ini?</label>
    <div class="form-group">
					
					<div class="col-sm-6">
						<input type="submit" name="delete" class="btn btn-primary" value="HAPUS">
						<a href="index.php?page=data_sample" class="btn btn-warning">BATAL</a>
					</div>
	</div>   
	</form> 

	