<?php  
include "header.php";
include "includes/config.php";

//code insert data
if ($_POST) {
	$ket = $_POST['kt'];
	$jm = $_POST['jm'];

	$insert = mysqli_query($koneksi,"INSERT INTO nilai_kriteria 
								VALUES
								('','$ket','$jm')");
	if ($insert) {
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
			<h4>Form Tambah Nilai Kriteria</h4>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
	<br><br>
	<form method="POST" action="">
	  <div class="form-group row">
	    <label for="kt" class="col-sm-2 col-form-label">Keterangan Nilai</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="kt" name="kt">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="jum" class="col-sm-2 col-form-label">Jumlah Nilai</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="jum" name="jm">
	    </div>
	  </div>
	  <div class="form-group row">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">Tambah</button>
	      <button type="button" onclick="location.href='nilai.php'" class="btn btn-success">Kembali</button>
	    </div>
	  </div>
	</form>
</div>