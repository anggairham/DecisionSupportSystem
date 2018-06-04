<?php  
include "header.php";
include "includes/config.php";

//code insert data
if ($_POST) {
	$ket = $_POST['kt'];
	$jm = $_POST['jm'];

	$insert = mysqli_query($koneksi,"INSERT INTO nilai_alternatif
								VALUES
								('','$ket','$jm')");
	if ($insert) {
	?>		
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="nilai.php#na">lihat semua data</a>.
	</div>
	<?php  	
	}else { 
	?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
	</div>		
	<?php  
		}
	}
	?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Form Tambah Nilai Alternatif</h4>
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
	      <button type="button" onclick="location.href='nilai.php#na'" class="btn btn-success">Kembali</button>
	    </div>
	  </div>
	</form>
</div>