<?php  
include "header.php";
include "includes/config.php";
//code edit data
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$query = mysqli_query($koneksi,"SELECT * FROM alternatif WHERE id_alternatif='$id'");
$getRow = mysqli_fetch_array($query);

//code update data
if ($_POST) {
	$nm = $_POST['nm'];

	$update = mysqli_query($koneksi,"UPDATE alternatif 
						SET nama_alternatif='$nm'
						WHERE id_alternatif ='$id'");
	if ($update) {
		echo "<script>location.href='alternatif.php'</script>";
	}else {
		echo "Gagal";
	}
}
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Form Ubah Alternatif</h4>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
	<br><br>
	<form method="POST" action="">
	  <div class="form-group row">
	    <label for="id" class="col-sm-2 col-form-label">Id Alternatif</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="id" name="id" value="<?php echo $getRow['id_alternatif'] ?>" disabled>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="nm" class="col-sm-2 col-form-label">Nama Alternatif</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="nm" name="nm" value="<?php echo $getRow['nama_alternatif'] ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">Ubah</button>
	      <button type="button" onclick="location.href='alternatif.php'" class="btn btn-success">Kembali</button>
	    </div>
	  </div>
	</form>
</div>