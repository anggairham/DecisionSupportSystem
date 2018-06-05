<?php  
include "header.php";
include "includes/config.php";
//code edit data
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$query = mysqli_query($koneksi,"SELECT * FROM nilai_kriteria WHERE id_nilai_kriteria=".$id);
$getRow = mysqli_fetch_array($query);

//code update data
if ($_POST) {
	$ket = $_POST['kt'];
	$jm = $_POST['jm'];

	$update = mysqli_query($koneksi,"UPDATE nilai_kriteria 
						SET ket_nilai_kriteria = '$ket',jum_nilai_kriteria ='$jm'
						WHERE id_nilai_kriteria ='$id'");
	if ($update) {
		echo "<script>location.href='nilai.php'</script>";
	}else {
		echo "Gagal";
	}
}
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Form Ubah Nilai Kriteria</h4>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
	<br><br>
	<form method="POST" action="">
	  <div class="form-group row">
	    <label for="id" class="col-sm-2 col-form-label">Id Nilai</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="id" name="id" value="<?php echo $getRow['id_nilai_kriteria'] ?>" disabled>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="kt" class="col-sm-2 col-form-label">Keterangan Nilai</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="kt" name="kt" value="<?php echo $getRow['ket_nilai_kriteria'] ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="jum" class="col-sm-2 col-form-label">Jumlah Nilai</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="jum" name="jm" value="<?php echo $getRow['jum_nilai_kriteria'] ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">Ubah</button>
	      <button type="button" onclick="location.href='nilai.php'" class="btn btn-success">Kembali</button>
	    </div>
	  </div>
	</form>
</div>